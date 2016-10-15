<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::auth();
    // Route::get('/login','Auth\AuthController@showLoginForm');
    // Route::post('/login','Auth\AuthController@login');
    Route::get('/logout','Auth\LoginController@logout'); 
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/error-not-allowed', function () {
    return view('error-not-allowed');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', function () {
	    return "Home!!!";
	});
	Route::get('/equipos', 'EquiposController@showAllEquipos');
	Route::get('/equipos/new', 'EquiposController@showNewEquipoForm');
	Route::post('/equipos/new', 'EquiposController@registerNewEquipo');
	Route::get('/equipos/{idEquipo}', 'EquiposController@showEquipoDetails');
	Route::post('/equipos/{idEquipo}', 'EquiposController@editEquipoDetails');
});

Route::group(['middleware' => ['auth', 'admin']], function () {
	Route::get('/equipos/{idEquipo}/delete', 'EquiposController@deleteEquipo');
});
