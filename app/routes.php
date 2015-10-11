<?php
/*
 *Route to direct to the homepage
 */
Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@create'
]);

/*
 *Route to the signup page
 */
Route::get('signup', [
    'as' => 'signup_path',
    'uses' => 'SignUpController@create'
]);

/*
 *Route from the signup form to direct to controller
 * in order to store the new user
 */
Route::post('signup', [
    'as' => 'signup_path',
    'uses' => 'SignUpController@store'
]);

/*
 *Route to the login page
 */
Route::get('login', [
	'as' => 'login',
	'uses' => 'LoginController@create'
]);

/*
 *Route to the login form to direct to controller
 * to authenticate login
 */
Route::post('login', [
	'as' => 'login_path',
	'uses' => 'LoginController@check'
]);

/*
 *Route to logout the user
 */
Route::get('logout', [
    'as' => 'logout_path',
    'uses' => 'LoginController@destroy'
]);


Route::get('register_presentation', [
    'as' => 'register_presentation_path',
    'uses' => 'RegisterPresentationController@create'
]);

Route::post('register_presentation', [
    'as' => 'register_presentation_path',
    'uses' => 'RegisterPresentationController@store'
]);

Route::get('schedules', [
    'as' => 'schedules_path',
    'uses' => 'SchedulesController@create'
]);

Route::get('settings', [
    'as' => 'settings_path',
    'uses' => 'SettingsController@create'
]);

Route::get('dashboard', [
    'as' => 'dashboard_path',
    'uses' => 'DashboardController@create'
]);


