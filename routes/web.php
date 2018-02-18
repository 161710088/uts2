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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('z','PulauController');
Route::resource('y','ProvinsiController');
Route::resource('x','KotaController');
Route::resource('w','KabupatenController');
Route::resource('v','SukuController');
Route::resource('u','KesenianController');
Route::resource('t','WisataController');
Route::resource('s','MakananController');
Route::resource('r','SenjataController'); 
Route::resource('q','PahlawanController');