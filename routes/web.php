<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'ActivoFijoController@index')->name('mostrar');
Route::get('/agregar', 'ActivoFijoController@create')->name('agregar');
Route::get('/editar/{activo}','ActivoFijoController@edit')->name('editar');
//
Route::post('/agregar', 'ActivoFijoController@store')->name('addActivo');
