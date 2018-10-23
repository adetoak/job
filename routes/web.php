<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::group(array('middleware' => 'auth'), function(){

	Route::get('dashboard', 'ManageController@dashboard')->name('dashboard');
	
	//Service Controller	
	Route::get('services', 'serviceController@services')->name('services');
	Route::post('newservice', 'ServiceController@newservice')->name('newservice');
	Route::post('servicescategory', 'ServiceController@servicescategorypost')->name('servicescategory');
	
	//Client Controller
	Route::get('clients', 'ClientController@clients')->name('clients');
	Route::post('clientcategory', 'ClientController@clientcategorypost')->name('clientcategory');

	//Product Controller
	Route::get('products', 'ProductController@product')->name('products');
	Route::post('newproduct', 'ProductController@newproduct')->name('newproduct');
	Route::post('productcategory', 'ProductController@productcategorypost')->name('productcategory');


	Route::get('job-requests', 'ManageController@jobs')->name('jobs');
	Route::get('job/edit/{id}', 'JobController@edit')->name('edit');

	//Blog
	Route::get('blog', 'ManageController@blogposts')->name('blogposts');
	Route::post('newpost', 'ManageController@newpost')->name('newpost');

	//Mail controller
	Route::get('mail', 'MailController@mail')->name('mail');
	Route::post('sendmail', 'MailController@sendmail')->name('sendmail');
	
	Route::get('profile', 'UserController@profile')->name('profile');
	Route::get('manage-users', 'UserController@manageusers')->name('manage-users');
	Route::post('adduser', 'UserController@adduser')->name('adduser');
	Route::get('mon-add', 'UserController@monadd')->name('mon-add');
	Route::get('question', 'UserController@question')->name('question');
	Route::get('link-tracker', 'UserController@linktracker')->name('link-tracker');
});
