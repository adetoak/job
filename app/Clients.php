<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    public static $mail_rules = [
                        
        'subject' => 'required',
        'message' => 'required',      
    ];
    protected $table = 'users';

    protected $fillable = [
        'full_name', 'username', 'email', 'telephone', 'country', 'state', 'city', 'password',
    ];
}
