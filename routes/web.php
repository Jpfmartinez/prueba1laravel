<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('home');
Route::get('/mostrar', 'ActivoFijoController@index')->name('mostrar');
Route::view('/agregar', 'agregar')->name('agregar');
