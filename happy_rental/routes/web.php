<?php

use Illuminate\Routing\Router;
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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/login', 'DashboardController@login')->name('login');
Route::post('/postlogin', 'DashboardController@postlogin')->name('login.post');
Route::get('/logout', 'DashboardController@logout')->name('logout');

Route::group(['middleware' => ['auth', 'checkRole:Manager, Keuangan, CS']], function() {
    Route::get('/dashboards', 'DashboardController@index')->name('dashboard');

    Route::get('/data_pegawai', 'PegawaiController@index')->name('pegawai');
    Route::post('/data_pegawai', 'PegawaiController@create')->name('pegawai.create');
    Route::get('/data_pegawai/{id}/profile', 'PegawaiController@profile')->name('pegawai.profile');
    Route::get('/data_pegawai/{id}/edit', 'PegawaiController@edit')->name('pegawai.edit');
    Route::post('/data_pegawai/{id}/update', 'PegawaiController@update')->name('pegawai.update');
    Route::get('/data_pegawai/{id}/delete', 'PegawaiController@delete')->name('pegawai.delete');
    Route::get('/profile/{id}', 'PegawaiController@profileUser')->name('profile');
    Route::get('getdatapegawai', [
        'uses' => 'PegawaiController@getdatapegawai',
        'as' => 'get.data.pegawai'
    ]);

    Route::get('/data_mobil', 'RentalController@mobil')->name('mobil');
    Route::post('/data_mobil/create', 'RentalController@mobilcreate')->name('mobil.create');
    Route::get('/data_mobil/{id}/edit', 'RentalController@mobiledit')->name('mobil.edit');
    Route::post('/data_mobil/{id}/update', 'RentalController@mobilupdate')->name('mobil.update');
    Route::get('/data_mobil/{id}/delete', 'RentalController@mobildelete')->name('mobil.delete');
    Route::get('getdatamobil', [
        'uses' => 'RentalController@getdatamobil',
        'as' => 'get.data.mobil'
    ]);

    Route::get('/data_motor', 'RentalController@motor')->name('motor');
    Route::post('/data_motor/create', 'RentalController@motorcreate')->name('motor.create');
    Route::get('/data_motor/{id}/edit', 'RentalController@motoredit')->name('motor.edit');
    Route::post('/data_motor/{id}/update', 'RentalController@motorupdate')->name('motor.update');
    Route::get('/data_motor/{id}/delete', 'RentalController@motordelete')->name('motor.delete');
    Route::get('getdatamotor', [
        'uses' => 'RentalController@getdatamotor',
        'as' => 'get.data.motor'

    ]);

    Route::get('/data_member', 'MemberController@index')->name('member');
    Route::post('/data_member', 'MemberController@create')->name('member.create');
    Route::get('/data_member/{id}/profile', 'MemberController@profile')->name('member.profile');
    Route::get('/data_member/{id}/edit', 'MemberController@edit')->name('member.edit');
    Route::get('get.data.member', [
        'uses' => 'MemberController@getdatamember',
        'as' => 'get.data.member'
    ]);
});





