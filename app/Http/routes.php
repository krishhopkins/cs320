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

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::get('characters', 'CharacterController@index');

Route::get('characters/new', 'CharacterController@create_new');

Route::post('characters', 'CharacterController@create');

Route::get('content/about', 'PagesController@about');

Route::get('new', 'PagesController@newc');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
