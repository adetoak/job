<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public static $rules = [
                        
        'title' => 'required',
        'description' => 'required',      
        'category' => 'required',      
        'deliveryduration' => 'required',      
        'price' => 'required',      
        'qtyavailable' => 'required',      
    ];
    public static $search_rules = [
                        
        'search' => 'required',          
    ];
    protected $table = 'products';
    protected $fillable = ['user_id', 'product_id', 'title', 'description', 'category', 'duration', 'price', 'quantity_available', 'image_path', 'verification'];
}
