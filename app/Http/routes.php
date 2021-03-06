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

Route::get('pesan',['uses'=>'HomeController@pesan','as'=>'pesan']);

Route::post('konfirmasi-show',['uses'=>'HomeController@showKonfirmasi','as'=>'konfirmasi.show']);
Route::post('konfirmasi-submit',['uses'=>'HomeController@postKonfirmasi','as'=>'konfirmasi.submit']);
Route::post('list_tujuan',['uses'=>'HomeController@listTujuan','as'=>'list_tujuan']);
Route::get('admin',['uses' => 'AdminController@getIndex','as' => 'admin']);
Route::post('updateData',['uses'=>'AdminController@updateData','as'=>'updateData']);
Route::post('getDataStatistic',['uses'=>'AdminController@getDataStatistic','as'=>'getDataStatistic']);

Route::controllers([
    'admin' => 'AdminController'
]);


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
