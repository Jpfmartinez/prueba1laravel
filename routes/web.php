<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'ActivoFijoController@index')->name('mostrar');
Route::get('/agregar', 'ActivoFijoController@create')->name('agregar');
//
Route::post('/agregar', 'ActivoFijoController@store')->name('addActivo');