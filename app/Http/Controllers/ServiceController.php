<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Services;
use App\Job;
use App\User;
use App\Clients;
use DB;
use App\ServicesCategory;
use Storage;

class ServiceController extends Controller
{
    
	public function services(){

		$services = DB::table('services')
                    ->join('users', 'services.user_id', '=', 'users.id')                    
                    ->paginate(10);
		$servicecategories = 	DB::table('services_category')
		                        ->paginate(10);
        $clients = Clients::all();

		return view('services', compact('services', 'servicecategories', 'clients'));	
		
	}

    public function newservice(Request $request){        

        $user = Auth::user();
        $data = $request->all();

        $validator = Validator::make($data, Services::$rules);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }else{

            $pic = $request->file('serviceimg');        
            $filename = $pic->getClientOriginalName();   
            $serviceid = "admin-".$request->Input('serviceid');
            $path = "localhost/mouthpiece";


            $services = new Services();       
            $services->user_id = $request->Input('userid'); 
            $services->service_id = $serviceid;
            $services->title = $request->Input('title');             
            $services->description = $request->Input('description');        
            $services->category = $request->Input('category');        
            $services->duration = $request->Input('deliveryduration');   
            $services->price = $request->Input('price');   
            $services->requirement = $request->Input('requirement'); 
            $services->image_path =  $pic->getClientOriginalName();   
            $services->verification = '1';                                          

            
            if ($request->file('serviceimg')->move($path.'/public/img/services/service-'.$serviceid.'/', $filename)){
                //Storage::disk('custom')->put('file.txt', 'Contents');
                //
                /*echo $serviceid;
                die();*/
                
                $services->save();
                $request->session()->flash('success_msg', 'Success.');          
                return redirect('services');          
            }else{
                $request->session()->flash('error_msg', 'Error: Try Again');           
                return redirect('services');   
            }

        }

    } 
    public function servicescategorypost(Request $request){
    	
        $user = Auth::user();
        $data = $request->all();

        $validator = Validator::make($data, ServicesCategory::$rules);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
           
            $services = new ServicesCategory();       
            $services->title = $request->Input('categorytitle');   

            if ($services->save()){                                
                $request->session()->flash('success_msg', 'Success.');          
                return redirect('services');          
            }else{
                $request->session()->flash('error_msg', 'Error: Try Again');           
                return redirect('services');   
            }

        }

    }
}
