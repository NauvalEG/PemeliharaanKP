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

Route::get('/panel', function () {
	return view('form_panel');
});

Route::get('/pompa', function () {
	return view('form_pompa');
});

Route::get('/trafo', function () {
	return view('form_trafo');
});
/*
Route::get('login','AuthController');

Route::controllers([
	'auth' -> 'Auth\AuthController',
	'password' -> 'Auth\PasswordController'
	]); 
*/