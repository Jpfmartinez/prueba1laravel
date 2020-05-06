<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'ActivoFijoController@index')->name('mostrar');
Route::get('/agregar', 'ActivoFijoController@create')->name('agregar');
Route::get('/editar','ActivoFijoController@edit')->name('editar');
Route::get('/{id}', 'ActivoFijoController@show')->name('show');
//
Route::post('/agregar', 'ActivoFijoController@store')->name('addActivo');
