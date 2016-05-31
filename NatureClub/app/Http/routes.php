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
Route::get('/edit', function () {
	return view('edit');
});
Route::post('/submit','BirdController@store');
Route::get('/show','BirdController@display');
Route::get('/birdinfo/{name}', ['uses' => 'BirdController@popup']);

Route::get('/photo-of-the-month', 'GenController@photoOfTheMonth');
Route::get('/photo-of-the-month/edit', function () {
	return view('editphoto');
});
Route::post('/submit-photo', 'GenController@submitPhoto');
Route::get('/photo-of-the-month/{year}/{month}', ['uses' => 'GenController@showPhoto']);