<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PostsController@index');
Route::get('/posts/all','PostsController@all');
Route::get('/posts/deletepost/{id}','PostsController@deletepost');
Route::resource('home', 'PostsController@index');
Route::get('/posts/editpost/{id}','PostsController@editpost');
Route:get('/auth','PostsController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
]);


//Route::get('/auth/activateaccount',function(){
//    return 'thi is ativvvv';
//});
//Route::get('activate/{code}', 'Auth\AuthController@activateAccount');
    
    
// Registration routes...
// Route::get('auth/register', 'Auth\AuthController@register');
// Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::get('/users/create','UsersController@create');
Route::get('/users/login','UsersController@login');
Route::get('/users/changepassword','UsersController@changepassword');

Route::get('/users/edit/{id}','UsersController@edit');
Route::get('/users/edituser/{id}','UsersController@edituser');
Route::get('/users/deleteuser/{id}','UsersController@deleteuser');
//Route::post('/users/deleteuser','UsersController@deleteuser');
//Route::get('users/{id}/editprofile', function ($id) {
//    
//});

//Route::get('/users/editprofile/{id}', function($id){
     
//    return url('/users/editprofile');
//});
//Route::post('/users/activateaccount/{code}',function($code){
//    return view('users.ac/tivateaccount');
//});
Route::get('/users/activateaccount','UsersController@activateaccount');
Route::post('/users/activateaccount','UsersController@activateaccount');
Route::post('/users/changepassword','UsersController@changepassword');
//Route::get('/users/login',function(){
//    //return 'users login page';
//    return view('users.login');
//});
Route::resource('users','UsersController');

// Route::get('posts/create', 'PostsController@create');
// Route::get('posts', 'PostsController@index');
// Route::get('posts/{id}', 'PostsController@show');
// Route::post('posts','PostsController@store');
// Route::post('posts/{id}/edit','PostsController@edit');
Route::get('/admin/logout', 'AdminController@getLogout');
Route::get('/admin/profile', function(){
    return view('admin.profile');
});
Route::get('/admin/login',function(){
    return view('admin.login');
});

Route::resource('posts', 'PostsController');
Route::post('/admin/postLogin','AdminController@postLogin');
//Route::resource('admin', 'AdminController');
//Route::get('/admin',function(){
//    return view('admin.dashboard');
//});
Route::get('/admin','AdminController@index');
Route::get('/users','UsersController@index');

