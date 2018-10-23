<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Services;
use App\Job;
use App\User;
use App\Clients;
use App\Clientcategory;

class ClientController extends Controller
{
    public function clients(){

    	$clients = Clients::paginate(20);		
    	$clientcategorys = Clientcategory::paginate(20);	        
    	return view('clients', compact('clients', 'clientcategorys'));
    }    

    public function clientcategorypost(Request $request){        

        $user = Auth::user();
        $data = $request->all();

        $validator = Validator::make($data, Clientcategory::$category_rules);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }else{

            $pic = $request->file('categoryimg');        
            $filename = $pic->getClientOriginalName();   
            //$categoryid = "admin-".$request->Input('categoryid');

            $category = new Clientcategory();                   
            $category->title = $request->Input('title');             
            $category->price = $request->Input('price');               
            $category->sdescription = $request->Input('sdescription');        
            $category->ldescription = $request->Input('ldescription');                     
            $category->category_img =  $pic->getClientOriginalName();   
            
            if ($request->file('categoryimg')->move('public/img/clientcategory/', $filename)){                        
                $category->save();
                $request->session()->flash('success_msg', 'Success.');          
                return redirect('clients');          
            }else{
                $request->session()->flash('error_msg', 'Error: Try Again');           
                return redirect('clients');   
            }

        }

    }
}
