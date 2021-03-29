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

Route::get('/karyawan/edit/{id}','KaryawanController@edit');

Route::get('/karyawan/hapus/{id}','KaryawanController@destroy');

// Route user
Route::resource('/user', 'UserController');
