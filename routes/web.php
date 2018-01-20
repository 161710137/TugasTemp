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
    return view('welcome');
});

Route::get('/1', function () {
    return view('layouts.1');
});

Route::get('/custom1', function () {
    return view('layouts.custom1');
}); 

Route::get('/custom2', function () {
    return view('layouts.custom2');
});  
Route::get('/paragraf', function () {
    return view('layouts.3');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/qq','SiswaController@data');