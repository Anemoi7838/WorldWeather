<?php

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
    return view("sample");
    //return view('home');
});
Route::get('/request',"WeatherController@request");

Route::get('/top', function () {
    return view('top');
});

Route::get('/sample',"WeatherController@sample");