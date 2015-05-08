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

//Route::get('/', 'HomeController@index');
Route::get('/', 'PagesController@about');


Route::get('home', 'CharacterController@index');

/* characters */
Route::get('characters', 'CharacterController@index');
Route::get('characters/new', 'CharacterController@create_new');
Route::post('characters', 'CharacterController@create');
/* characters actions */
Route::get('characters/{name}/inventory', 'CharacterController@inventory');
Route::get('characters/{name}/delete', function($id)
{
	return view('characterdeleteconf')->with('name', $id);
});
Route::get('characters/{name}/delete/cfm', 'CharacterController@delete_c');
Route::get('characters/{name}/more', 'CharacterController@info');
Route::get('characters/{name}/inventory', 'ShopController@iindex');


/* shop */
Route::get('shop', 'ShopController@index');

/* inventory */
Route::get('inventory', 'ShopController@iindex_all');

Route::get('new', 'CharacterController@create_new');

Route::post('/', 'CharacterController@create');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
