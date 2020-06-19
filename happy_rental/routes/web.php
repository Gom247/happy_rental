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
