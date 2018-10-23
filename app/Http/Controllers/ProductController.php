<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Services;
use App\Product;
use App\Job;
use App\User;
use App\Clients;
use DB;
use App\ProductCategory;

class ProductController extends Controller
{
	public function product(){

		$products = DB::table('products')
                    ->join('users', 'products.user_id', '=', 'users.id')                    
                    ->paginate(10);
		$productcategories = 	DB::table('product_category')
		                        ->paginate(10);
        $clients = Clients::all();
		return view('products', compact('products', 'productcategories', 'clients'));	
		
	}

    public function newproduct(Request $request){        

        $user = Auth::user();
        $data = $request->all();

        $validator = Validator::make($data, Product::$rules);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }else{

            $pic = $request->file('productimg');        
            $filename = $pic->getClientOriginalName();   
            $productid = "admin-".$request->Input('productid');
            $path = "localhost/mouthpiece";


            $products = new Product();       
            $products->user_id = $request->Input('userid'); 
            $products->product_id = $productid;
            $products->title = $request->Input('title');             
            $products->description = $request->Input('description');        
            $products->category = $request->Input('category');        
            $products->duration = $request->Input('deliveryduration');   
            $products->price = $request->Input('price');   
            $products->quantity_available = $request->Input('qtyavailable'); 
            $products->image_path =  $pic->getClientOriginalName();   
            $products->verification = '1';                                          

            
            if ($request->file('productimg')->move($path.'/public/img/products/product-'.$productid.'/', $filename)){
                                
                $products->save();
                $request->session()->flash('success_msg', 'Success.');          
                return redirect('products');          
            }else{
                $request->session()->flash('error_msg', 'Error: Try Again');           
                return redirect('products');   
            }

        }

    }

    public function productcategorypost(Request $request){

    	

        $user = Auth::user();
        $data = $request->all();

        $validator = Validator::make($data, ProductCategory::$rules);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
           
            $product = new ProductCategory();       
            $product->title = $request->Input('categorytitle');   

            if ($product->save()){                                
                $request->session()->flash('success_msg', 'Success.');          
                return redirect('products');          
            }else{
                $request->session()->flash('error_msg', 'Error: Try Again');           
                return redirect('products');   
            }

        }

    }
}
