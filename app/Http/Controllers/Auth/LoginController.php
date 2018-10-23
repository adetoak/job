<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Services;
use App\Job;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request){
        
        $data = $request->all();

        $validator = Validator::make($data, User::$auth_rules);

        if ($validator->fails())
        {

            return redirect('login')->withErrors($validator)->withInput();

        }       

        if (auth()->attempt(array('username' => $request->input('username'), 'password' => $request->input('password'))))
        {            
            return redirect()->intended('username');
        }else{
            return back()->with('error','your username and password are wrong.');
        }
    }
}
