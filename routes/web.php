<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Lat1Controller;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/lat1', 'App\Http\Controllers\Lat1Controller@index');
Route::get('/lat1/m2', 	'App\Http\Controllers\Lat1Controller@method2');
