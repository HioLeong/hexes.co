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

Route::get('/', function()
{
	//return View::make('hello');
    return "hello";
});

Route::get('/', "LoginController@showPage");
Route::post('Submit', function() {
    $input = Input::get('email');
    return $input;
});

Route::post('/login', 'LoginController@registerUserFromPost');
