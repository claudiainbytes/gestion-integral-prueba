<?php

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

Route::get('/', function () {
    return view('layouts/app');
});

Route::group(['middleware' => 'web','prefix' => 'ciudades'], function() {
    Route::get('/', 'CiudadesController@index');
    Route::get('/nuevo', 'CiudadesController@create');
    Route::get('/{id}/editar', 'CiudadesController@edit');
    Route::get('/{id}/borrar', 'CiudadesController@destroy');
    Route::post('/guardar', 'CiudadesController@store');
    Route::put('/{id}/guardar', 'CiudadesController@update');
    Route::get('/{campo}/{dato}/existe', 'CiudadesController@existe');
});


Route::group(['middleware' => 'web','prefix' => 'clientes'], function() {
    Route::get('/', 'ClientesController@index');
    Route::get('/nuevo', 'ClientesController@create');
    Route::get('/{id}/editar', 'ClientesController@edit');
    Route::get('/{id}/borrar', 'ClientesController@destroy');
    Route::post('/guardar', 'ClientesController@store');
    Route::put('/{id}/guardar', 'ClientesController@update');
    Route::get('/{campo}/{dato}/existe', 'ClientesController@existe');
});

