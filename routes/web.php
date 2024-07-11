<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('home');
})->name('home');

Route::get('alumnos', 'App\Http\Controllers\AlumnosController@index')->name('alumnos.index');

Route::get('alumnos/{id}', 'App\Http\Controllers\AlumnosController@show')->name('alumnos.show')->where('id', '[0-9]+');

Route::get('alumnos/registro', 'App\Http\Controllers\AlumnosController@create')->name('alumnos.create');

Route::post('alumnos', 'App\Http\Controllers\AlumnosController@store')->name('alumnos.store');
