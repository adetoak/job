<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public static $rules = [
                                       
        'username' => 'required|min:7|unique:adminusers',
        'name' => 'required',                
        'email' => 'required|string|email|unique:adminusers',
        'password' => 'required|string|min:8|same:password_confirmation',
        'role'  => 'required',
    ];

    public static $auth_rules = [
                                       
        'username' => 'required|exists:adminusers',
        'password' => 'required',                        
    ];

    protected $table = 'adminusers';
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
