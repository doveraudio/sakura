<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('public/welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::post('/login', 'Auth\AuthController@authenticate')->name('login');
Route::post('/register', 'Auth\AuthController@create')->name('register');

Route::group(['middleware' => ['web']], function () {
    //
    
    
    
Route::resource('forums', 'ForumController');
Route::get('home', function(){
   return view('users/home'); 
});
Route::get('token', function(){
    return csrf_token();
});
Route::get('users/home', function(){
    return view('users/home');
});

Route::get('users/request', 'UserViewController@home');

});
