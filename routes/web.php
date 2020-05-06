<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'ActivoFijoController@index')->name('mostrar');
Route::view('/agregar', 'agregar')->name('agregar');
