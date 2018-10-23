<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Services;
use App\Job;
use App\User;
use App\Blog;
use DB;

class ManageController extends Controller
{
    public function dashboard(){
				
		return view('dashboard');		
		
	}
	public function clients(){

		$clients = User::paginate(10);
		return view('clients', compact('clients'));		
		
	}
	public function services(){

		$services = DB::table('services')
                    ->join('users', 'services.user_id', '=', 'users.id')                    
                    ->paginate(10); 
		return view('services', compact('services'));		
		
	}
	public function products(){

		$products = DB::table('products')
                    ->join('users', 'products.user_id', '=', 'users.id')                    
                    ->paginate(10);
		return view('products', compact('products'));		
		
	}
	public function jobs(){

		$jobs = DB::table('jobs')
                    ->join('users', 'jobs.user_id', '=', 'users.id')                    
                    ->paginate(10);
		return view('job-requests', compact('jobs'));		
		
	}
	public function transactions(){

		$jobs = DB::table('transactions')
                    ->join('users', 'transactions.user_id', '=', 'users.id')                    
                    ->paginate(10);
		return view('transactions', compact('transactions'));		
		
	}
	public function blogposts(){

		$posts = DB::table('blog')                                       
                    ->paginate(10);
		return view('blog-post', compact('posts'));		
		
	}
	public function newpost(Request $request){        

        $user = Auth::user();
        $data = $request->all();

        $validator = Validator::make($data, Blog::$rules);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }else{

            $posts = new Blog();       
            $posts->title = $request->Input('posttitle');             
            $posts->link = $request->Input('postlink');                                              

            
            if ($posts->save()){                                
                
                $request->session()->flash('success_msg', 'Success.');          
                return redirect('blog');          
            }else{
                $request->session()->flash('error_msg', 'Error: Try Again');           
                return redirect('blog');   
            }

        }

    }
	
}
