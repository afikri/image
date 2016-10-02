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
    return redirect('images');
});

Route::get('images', [
	'as'=> 'index',
	'uses'=>'ImageController@index'
]);

Route::get('images/create', [
	'as'=>'create',
	'uses'=>'ImageController@create'
]);

Route::post('images/store', [
	'as'=>'store',
	'uses'=>'ImageController@store'
]);

Route::get('images/show/{id}', 'ImageController@show');
