<?php

use Illuminate\Support\Facades\Route;

//Trabajadores
Route::resource('trabajadores','trabajadorController');

Route::get('/', 'ActivoFijoController@index')->name('mostrar');
Route::get('/agregar', 'ActivoFijoController@create')->name('agregar');

Route::get('/editar/{id}','ActivoFijoController@edit')->name('editar');
Route::patch('/editar/{id}','ActivoFijoController@update')->name('actualizar');

Route::get('/{id}', 'ActivoFijoController@show')->name('show');

Route::delete('/{id}','ActivoFijoController@destroy')->name('borrar');
//
Route::post('/agregar', 'ActivoFijoController@store')->name('addActivo');
