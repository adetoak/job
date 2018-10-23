<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public static $rules = [
                        
        'posttitle' => 'required',
        'postlink' => 'required',                    
    ];
    
    protected $table = 'blog';
    protected $fillable = ['title', 'link'];
}
