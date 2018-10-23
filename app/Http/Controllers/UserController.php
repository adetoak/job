<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Services;
use App\Job;
use App\User;

class UserController extends Controller
{
    public function profile(){

    	return view('profile');
    }
    public function manageusers(){

    	return view('manage-users');
    }
    public function adduser(Request $request){

        $user = Auth::user();
        $data = $request->all();

        $validator = Validator::make($data, User::$rules);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }else{            

            $newuser = new User();       
            $newuser->username = $request->Input('username');
            $newuser->name = $request->Input('name');
            $newuser->role = $request->Input('role');
            $newuser->email = $request->Input('email');
            $newuser->password = bcrypt($request->Input('password'));                                  
            
            if ($newuser->save()){                               
                $request->session()->flash('success_msg', 'Success. User added');          
                return redirect('manage-users');          
            }else{
                $request->session()->flash('error_msg', 'Error: Try Again');           
                return redirect('manage-users');   
            }

        }
        return view('manage-users');
    }
    public function clients(){

    	return view('clients');
    }
    public function monadd(){

    	return view('mon-add');
    }
    public function question(){

    	return view('question');
    }
    public function each(){

    	return view('each');
    }
    public function linktracker(){

    	return view('link-tracker');
    }
}
