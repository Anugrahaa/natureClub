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
Route::get('/birds/edit', function () {
	return view('birds/edit');
});
Route::post('/birds/submit','BirdController@store');
Route::get('/birds/show','BirdController@display');
Route::get('/birdinfo/{name}', ['uses' => 'BirdController@popup']);


Route::get('/butterfly/edit', function () {
	return view('butterflies/edit');
});
Route::post('/butterfly/submit','ButterflyController@store');
Route::get('/butterfly/show','ButterflyController@display');
Route::get('/butterflyinfo/{name}', ['uses' => 'ButterflyController@popup']);


Route::get('/flora/edit', function () {
	return view('flora/edit');
});
Route::post('/flora/submit','FloraController@store');
Route::get('/flora/show','FloraController@display');
Route::get('/florainfo/{name}', ['uses' => 'FloraController@popup']);



Route::get('/photo-of-the-month', 'GenController@photoOfTheMonth');
Route::get('/photo-of-the-month/edit', function () {
	return view('editphoto');
});

Route::post('/submit-photo', 'GenController@submitPhoto');
Route::get('/photo-of-the-month/{year}/{month}', ['uses' => 'GenController@showPhoto']);