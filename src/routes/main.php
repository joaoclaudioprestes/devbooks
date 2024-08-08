<?php

use App\Http\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::post('/', 'App\Http\Controllers\HomeController@index');
Route::put('/', 'App\Http\Controllers\HomeController@index');
Route::delete('/', 'App\Http\Controllers\HomeController@index');