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

Route::get('/dashboards', 'DashboardController@index')->name('dashboard');
Route::get('/data_pegawai', 'PegawaiController@index')->name('pegawai');
Route::post('/data_pegawai', 'PegawaiController@create')->name('pegawai.create');
Route::get('/data_pegawai/{id}/profile', 'PegawaiController@profile')->name('pegawai.profile');
Route::get('/data_pegawai/{id}/edit', 'PegawaiController@edit')->name('pegawai.edit');
Route::post('/data_pegawai/{id}/update', 'PegawaiController@update')->name('pegawai.update');
Route::get('/data_pegawai/{id}/delete', 'PegawaiController@delete')->name('pegawai.delete');
Route::get('/data_mobil', 'RentalController@mobil')->name('mobil');
Route::post('/data_mobil/create', 'RentalController@mobilcreate')->name('mobil.create');
