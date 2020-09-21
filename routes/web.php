<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/linda', function () {
    return view('linda');
});

Route::get('/tommaso', function () {
    return view('tommaso');
});


Route::get('/Al', function () {
    return view('Al');
});

Route::get('/luca', function () {
    return view('luca');


});
