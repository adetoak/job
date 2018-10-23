<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientcategory extends Model
{
    public static $category_rules = [
                        
        'title'		  => 'required',
        'price'       => 'required',
        'sdescription' => 'required',      
        'ldescription' => 'required',
    ];
    protected $table = 'client_category';

    protected $fillable = [
        'title', 'price', 'sdecription', 'ldescription',
    ];
}
