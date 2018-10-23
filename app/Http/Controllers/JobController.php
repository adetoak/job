<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Services;
use App\Job;
use App\User;
use DB;

class JobController extends Controller
{
    public function edit($id){

		$jobs = DB::table('jobs')
                    ->join('users', 'jobs.user_id', '=', 'users.id')                    
                    ->where('id', $id);			
        return view('job-edit');
		
	}
}
