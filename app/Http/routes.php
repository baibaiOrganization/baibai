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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::get('juan',function(){
	dd('sss');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
$router->get('fo', [
	'uses' => 'HomeController@foo',
	'as' => 'fo',
	'middleware' => ['auth','permission'],
	'permission' => 'prueba'
]);


Route::get('usuarios', ['as' => 'users', 'uses' => 'UserController@showUsers']);
Route::get('editarUsuario', ['as' => 'editUser', 'uses' => 'UserController@showUsers']);
Route::get('eliminarUsuario', ['as' => 'deleteUser', 'uses' => 'UserController@showUsers']);