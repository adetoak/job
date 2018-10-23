<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Mail;
use Mail;
use Auth;
use Validator;
use App\Services;
use App\Job;
use App\User;
use DB;
use App\ProductCategory;
use App\Clients;
use App\Mail\Client;
use App\Email;

class MailController extends Controller
{
    public function mail(){

        $user = Auth::user();
        $mails = Email::all();
        
        return view('mail', compact('mails'));        
        
    }

    public function sendmail(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, Email::$rules);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }else{        

            $subject = $request->Input('subject');
            $body = $request->Input('message');
            $userid = $request->Input('userid');

            if (isset($userid) || !empty($userid)) {
                $clients = Clients::where('id', $userid);

                $data=[];
                $data['fullname'] = $clients->full_name;
                $data['email'] = $clients->email; 
                $data['subject'] = $request->Input('subject'); 
                $data['message'] = $request->Input('message'); 

                /*Mail::to($data['email'])
                      ->subject($data['subject'])
                      ->send(new Client($clients));*/
                Mail::send('emails.message', $data, function($message) use ($data){
                    $message->to($data['email']);
                    $message->subject($data['subject']);
                });

                $mail = new Email();
                $mail->username = $user->username;
                $mail->subject = $request->Input('subject');
                $mail->body = $request->Input('message');
                $mail->save();
                return redirect(route('mail'))->with('success_msg', 'Mail Sent successfuly');
            }else{                
                $clients = Clients::all();    

                foreach ($clients as $client) {
                    $data = [];
                	$data['fullname'] = $client->full_name;
                    $data['username'] = $client->username;
                	$data['email'] = $client->email;
                    $data['subject'] = $request->Input('subject'); 
                    $data['bodymessage'] = $request->Input('message');

                    /*Mail::to($data['email'])
                      //->subject($data['subject'])
                      ->send(new Client($client));*/ 
  
    	            Mail::send('emails.message', $data, function($message) use ($data){
    	                $message->to($data['email']);
    	                $message->subject($data['subject']);
    	            });           	
                }
                $mail = new Email();
                $mail->username = "All Clients";
                $mail->subject = $request->Input('subject');
                $mail->body = $request->Input('message');
                $mail->save();
                return redirect(route('mail'))->with('success_msg', 'Mail Sent successfuly'); 
            }
            
        }       
    }
}
