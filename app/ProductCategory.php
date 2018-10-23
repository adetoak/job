<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    public static $rules = [
                                       
        'categorytitle' => 'required|min:3',        
    ];
    protected $table = 'product_category';
    protected $fillable = [
        'title',
    ];
}
