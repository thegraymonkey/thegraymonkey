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

Route::get('srb', 'SrbController@index');

$router->resource('posts', 'PostController', ['only' => ['index', 'show', 'create', 'store', 'destroy', 'edit', 'update']]);
$router->resource('projects', 'ProjectController', ['only' => ['index', 'show', 'create', 'store', 'destroy', 'edit', 'update']]);
$router->resource('cv', 'CvController', ['only' => ['index', 'show', 'create', 'store', 'destroy', 'edit', 'update']]);
$router->controller('contacts', 'ContactController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


//Route::get('test', function(){
//	dd(Hash::make('real4five'));
//});
