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

Route::get('/suratmasuk','SuratMasukController@index');
Route::get('/suratmasuk/index','SuratMasukController@index');
Route::get('/suratmasuk/create','SuratMasukController@create');
Route::post('/suratmasuk/tambah','SuratMasukController@tambah');
Route::get('/suratmasuk/{id}/tampil','SuratMasukController@tampil');
Route::get('/suratmasuk/{id}/edit','SuratMasukController@edit');
Route::post('/suratmasuk/{id}/update','SuratMasukController@update');
Route::get('/suratmasuk/{id}/delete','SuratMasukController@delete');

Route::get('/klasifikasi', 'KlasifikasiController@index');
Route::get('/klasifikasi/index','KlasifikasiController@index');
Route::get('/klasifikasi/create','KlasifikasiController@create');
Route::post('/klasifikasi/tambah','KlasifikasiController@tambah');
Route::get('/klasifikasi/{id}/edit','KlasifikasiController@edit');
Route::post('/klasifikasi/{id}/update','KlasifikasiController@update');
Route::get('/klasifikasi/{id}/delete','KlasifikasiController@delete');

Route::get('/profil','ProfileController@index');


