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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route karyawan
Route::resource('/karyawan', 'KaryawanController');

Route::put('/karyawan/{id}/edit', 'KaryawanController@update')->name('karyawan.update');

Route::post('/karyawan/edit/{id}','KaryawanController@edit');

Route::get('/karyawan/detail/show/{id}', 'KaryawanController@show')->name('karyawan.detail.show/{id}');

Route::get('/karyawan/destroy/{id}','KaryawanController@destroy');

Route::get('/karyawan/edit/{nik}', 'KaryawanController@updateKaryawan')->name('updateKaryawan');

// Route user
Route::resource('/user', 'UserController');
