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
    'before' => 'auth_new',
    'as' => 'register_presentation_path',
    'uses' => 'RegisterPresentationController@create'
]);

Route::post('register_presentation', [
    'before' => 'auth_new',
    'as' => 'register_presentation_path',
    'uses' => 'RegisterPresentationController@store'
]);

/*
 *Route to the schedules form
 */
Route::get('schedules', [
    'as' => 'schedules_path',
    'uses' => 'SchedulesController@create'
]);

Route::get('api/meetings', [
    'uses' => 'SchedulesController@getMeeting'
]);

Route::get('meeting_details', [
    'as' => 'meeting_details_path',
    'uses' => 'MeetingDetailsController@create'
]);

Route::get('file_downloads', [
    'as' => 'file_downloads_path',
    'uses' => 'MeetingDetailsController@getDownload'
]);

Route::post('meeting_details', [
    'as' => 'addnotes_meeting_details_path',
    'uses' => 'MeetingDetailsController@addNotes'
]);

Route::get('mypresentations', [
    'as' => 'mypresentations_path',
    'uses' => 'MyPresentationsController@create'
]);

Route::get('edit_presentations', [
    'as' => 'edit_presentations',
    'uses' => 'MyPresentationsController@edit'
]);

Route::post('edit_presentations', [
    'as' => 'edited_presentation_path',
    'uses' => 'MyPresentationsController@makeEdit'
]);

Route::get('add_attachment_presentation', [
    'as' => 'add_attachment_presentation',
    'uses' => 'MyPresentationsController@addAttachment'
]);

Route::post('add_attachment_presentation', [
    'as' => 'add_attachment_presentation',
    'uses' => 'MyPresentationsController@uploadAttachment'
]);

Route::get('cancel_presentation', [
    'as' => 'cancel_presentation',
    'uses' => 'MyPresentationsController@cancel'
]);

Route::get('settings', [
    'as' => 'settings_path',
    'uses' => 'SettingsController@create'
]);

Route::post('columns_settings', [
    'as' => 'columns_settings_path',
    'uses' => 'SettingsController@setColumns'
]);

Route::post('frequency_settings', [
    'as' => 'frequency_settings_path',
    'uses' => 'SettingsController@setFrequency'
]);

Route::get('dashboard', [
    'as' => 'dashboard_path',
    'uses' => 'DashboardController@create'
]);

Route::post('access_dashboard', [
    'as' => 'access_dashboard_path',
    'uses' => 'DashboardController@setAccess'
]);

Route::post('access_dashboard_search', [
    'as' => 'access_dashboard_search_path',
    'uses' => 'DashboardController@searchUser'
]);

Route::post('reminder_dashboard', [
    'as' => 'reminder_dashboard_path',
    'uses' => 'DashboardController@setReminder'
]);

Route::post('meeting_dashboard_search', [
    'as' => 'meeting_dashboard_search_path',
    'uses' => 'DashboardController@searchMeeting'
]);

Route::post('meeting_dashboard', [
    'as' => 'meeting_dashboard_path',
    'uses' => 'DashboardController@setMeetingDate'
]);



