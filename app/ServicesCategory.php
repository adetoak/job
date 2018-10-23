<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicesCategory extends Model
{
    public static $rules = [
                                       
        'categorytitle' => 'required|min:3',        
    ];
    protected $table = 'services_category';
    protected $fillable = [
        'title',
    ];
}
