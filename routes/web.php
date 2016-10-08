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

use Illuminate\Http\Request;

Route::group(['middleware' => ['web']], function () {
    Route::auth();
    // Route::get('/login','Auth\AuthController@showLoginForm');
    // Route::post('/login','Auth\AuthController@login');
    Route::get('/logout','Auth\LoginController@logout'); 
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/equipos', function () {
	$equipos = App\Equipo::get();
    return view('equipos')->with('equipos', $equipos);
});

Route::get('/equipos/{idEquipo}', function ($idEquipo) {
	// $equipo = App\Equipo::where('id', $idEquipo)->first();
	$equipo = App\Equipo::find($idEquipo);
    return view('equipo-detail')->with('equipo', $equipo);
});

Route::get('/equipos/new', function (Request $request) {
	$name = $request->input('name');
	$marca = $request->input('marca');
	$modelo = $request->input('modelo');
	$newEquipo = new App\Equipo;
	$newEquipo->name = $name;
	$newEquipo->marca = $marca;
	$newEquipo->modelo = $modelo;
	$newEquipo->save();
    return redirect('/equipos');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', function () {
	    return "Home!!!";
	}); 
});
