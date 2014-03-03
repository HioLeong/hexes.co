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
Route::get('/', "LoginController@showPage");
Route::post('/login', 'LoginController@isValidUserFromPost');
Route::get('/register', 'LoginController@showRegisterPage');
Route::post('/register', 'LoginController@registerUserFromPost');
Route::post('/updateSettings', 'SettingsController@updateUserDetailsFromPost');
