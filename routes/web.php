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

Route::post('/karyawan/edit/{id}', 'KaryawanController@edit');

Route::get('/karyawan/detail/show/{id}', 'KaryawanController@show')->name('karyawan.detail.show/{id}');

Route::get('/karyawan/destroy/{id}', 'KaryawanController@destroy');

Route::get('/karyawan/edit/{nik}', 'KaryawanController@updateKaryawan')->name('updateKaryawan');
Route::get('/karyawan/get/{nik}', 'KaryawanController@getKaryawanByNik');
Route::get('/karyawan/slip/gaji', 'KaryawanController@slipgaji')->name('slip.list');
Route::get('/karyawan/slip/cetak/{nik}', 'KaryawanController@cetakSlip')->name('slip.cetak');

// Route user
Route::resource('/user', 'UserController');

// Route lembur
Route::resource('/lembur', 'LemburController');

// Route::get('/lembur/edit/{$nik}', 'LemburController@update')->name('update');

// Route::get('/lembur', 'LemburController@store');

// Route absensi
Route::resource('/absensi', 'AbsensiController');