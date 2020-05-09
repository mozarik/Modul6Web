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

Route::get('/berita/tambah', 'beritaController@create');
Route::get('berita', 'beritaController@index');
Route::post('berita/tambah/store', 'beritaController@store');
// Route::post('berita/hapus/store', 'beritaController@hapus');
// Route::get('berita/hapus', 'beritaController@hapus')->name('berita.hapus');
Route::get('delete-records', 'beritaController@index');
Route::get('delete/{id}', 'beritaController@destroy');
