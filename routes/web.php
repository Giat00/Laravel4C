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


//routing baru
Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa');

Route::get('mahasiswa/makul', 'MahasiswaController@makul')->name('makul');

Route::get('mahasiswa/input', 'MahasiswaController@input')->name('input');

Route::post('mahasiswa/insert', 'MahasiswaController@insert')->name('insert');

Route::post('simpan-matkul', 'MahasiswaController@store')->name('simpan.matkul');

Route::get('edit-matkul/{id}', 'MahasiswaController@edit')->name('matkul.edit');

Route::post('update-matkul/{id}', 'MahasiswaController@update')->name('update.matkul');

Route::get('hapus-matkul/{id}', 'MahasiswaController@destroy')->name('hapus.matkul');