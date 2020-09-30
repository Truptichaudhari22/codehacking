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

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/admin',function(){
    return view('admin.index');
});

Route::get('/user','AdminUsersController@index');
Route::get('/user/create','AdminUsersController@create');

Route::resource('/admin/user','AdminUsersController');
Route::get('/user/{id}/edit', [ 'as' => 'admin.users.edit', 'uses' => 'AdminUsersController@edit']);
