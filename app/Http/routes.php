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

Route::get('/', function () {
    return view('welcome');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
]);

// Registration routes...
// Route::get('auth/register', 'Auth\AuthController@register');
// Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::get('/users/create','UsersController@create');
Route::get('/users/login','UsersController@login');
Route::get('/users/changepassword','UsersController@changepassword');
Route::resource('users','UsersController');

// Route::get('posts/create', 'PostsController@create');
// Route::get('posts', 'PostsController@index');
// Route::get('posts/{id}', 'PostsController@show');
// Route::post('posts','PostsController@store');
// Route::post('posts/{id}/edit','PostsController@edit');
Route::resource('posts', 'PostsController');

Route::get('home','PostsController@index');