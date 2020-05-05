<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('home');
Route::view('/mostrar', 'mostrar')->name('mostrar');
Route::view('/agregar', 'agregar')->name('agregar');
