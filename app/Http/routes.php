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
Route::get('tiket',['uses'=>'HomeController@tiket','as'=>'tiket']);

Route::get('pesan','HomeController@pesan');

Route::get('konfirmasi','HomeController@konfirmasi');
Route::post('list_tujuan',['uses'=>'HomeController@listTujuan','as'=>'list_tujuan']);

Route::controllers([
    'admin' => 'AdminController'
]);


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
