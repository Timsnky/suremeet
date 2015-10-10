<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', [
	'as' => 'login',
	'uses' => 'LoginController@create'
]);

Route::post('login', [
	'as' => 'login_path',
	'uses' => 'LoginController@check'
]);

Route::get('signup', [
	'as' => 'signup_path',
	'uses' => 'SignUpController@create'
]);

Route::post('signup', [
	'as' => 'signup_path',
	'uses' => 'SignUpController@store'
]);

Route::get('homepage', [
	'as' => 'homepage',
	'uses' => 'HomeController@create'
]);

