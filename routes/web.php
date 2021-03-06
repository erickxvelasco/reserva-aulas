<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();





//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

//Route::get('/usuarios', 'App\Http\Controllers\UserController@index');



Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController');

    Route::get('solicitud/index2', 'App\Http\Controllers\SolicitudController@index2')->name('solicitud.index2');
    Route::resource('solicitud', 'App\Http\Controllers\SolicitudController');

    //Route::resource('recibido', 'App\Http\Controllers\SolicitudesRecibidosController');

    Route::resource('materia', 'App\Http\Controllers\MateriaController');

    Route::resource('grupo', 'App\Http\Controllers\GrupoController');
    Route::resource('ubicacion', 'App\Http\Controllers\UbicacionController');
    Route::resource('gestion', 'App\Http\Controllers\GestionController');
    Route::resource('aula', 'App\Http\Controllers\AulaController');

    Route::get('historico/{historico}', 'App\Http\Controllers\GestionController@historico')->name('gestion.historico');

    Route::get('recibido/llegada','App\Http\Controllers\SolicitudesRecibidosController@llegada')->name('recibido.llegada');
    Route::get('recibido','App\Http\Controllers\SolicitudesRecibidosController@prioridad')->name('recibido.prioridad');

    Route::patch('recibido/{recibido}','App\Http\Controllers\SolicitudesRecibidosController@update')->name('recibido.update');



    //route::get('solicitud/create/{data}', 'App\Http\Controllers\SolicitudController@create')->name('solicitud.create');
    route::post('user/{user}/asignature','App\Http\Controllers\UserController@asignature')->name('user.asignature');

    route::post('/permutaciones','App\Http\Controllers\SolicitudController@permutaciones')->name('aulas.permulaciones');



    /*
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
    */
});

