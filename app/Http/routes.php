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

Route::get('/','HomeController@tiket');
Route::get('tiket','HomeController@tiket');

Route::get('pesan','HomeController@pesan');

Route::get('konfirmasi','HomeController@konfirmasi');

Route::controllers([
    'admin' => 'AdminController'
]);


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
