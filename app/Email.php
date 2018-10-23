<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{ 
	public static $rules = [                       
        'subject' => 'required',
        'message' => 'required',              
    ];
    
    protected $table = 'mails';
    protected $fillable = ['subject', 'body'];
}
