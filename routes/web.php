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
    return view('proyek.showERD');
});

Route::get('/proyek/create', 'ItemController@create'); // menampilkan halaman form
Route::post('/proyek', 'ItemController@store'); // menyimpan data
Route::get('/proyek', 'ItemController@index'); // menampilkan semua

Route::get('/proyek/{id}/daftarkan-staff', 'ItemController@daftarstaf'); // menampilkan detail item dengan id 
Route::post('/proyek/{id}/daftarkan-staff','ItemController@storestaf'); // simpan staff

Route::get('/proyek/{id}/edit', 'ItemController@edit'); // menampilkan form untuk edit [proyek]
Route::put('/proyek/{id}', 'ItemController@update'); // menyimpan perubahan dari form edit
Route::delete('/proyek/{id}', 'ItemController@destroy'); // menghapus data dengan id