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
<<<<<<< HEAD
    return view('layouts.master');
});

Route::get('/proyek/create', 'PertanyaanController@create1');

Route::get('/proyek/{id}/daftarkan-staff', 'PertanyaanController@create2');

Route::post('/proyek', 'PertanyaanController@store');

Route::get('/proyek', 'PertanyaanController@index');

Route::get('/proyek/{id}', 'PertanyaanController@show');

Route::get('/proyek/{id}/daftarkan-staff', 'PertanyaanController@edit');

Route::get('/proyek/{id}/edit', 'PertanyaanController@edit');

Route::put('/proyek/{id}', 'PertanyaanController@update');

Route::delete('/proyek/{id}', 'PertanyaanController@destroy');
=======
    return view('index');
});

<<<<<<< HEAD
Route::get('/proyek','ProyekController@index');

Route::get('/proyek/create','ProyekController@create');
=======
Route::get('/proyek/create', 'ItemController@create'); // menampilkan halaman form
Route::post('/proyek', 'ItemController@store'); // menyimpan data
Route::get('/proyek/{id}/daftarkan-staff', 'ItemController@create_staff'); // menampilkan halaman form
Route::post('/proyek/{id}/daftarkan-staff', 'ItemController@store_staff'); // menyimpan data
Route::get('/proyek', 'ItemController@index'); // menampilkan semua
Route::get('/proyek/{id}/edit', 'ItemController@edit'); // menampilkan form untuk edit item
Route::put('/proyek/{id}', 'ItemController@update'); // menyimpan perubahan dari form edit
Route::delete('/proyek/{id}', 'ItemController@destroy'); // menghapus data dengan id
>>>>>>> 01d1b94bfba476af1255874a7c0442223a3eab5f
>>>>>>> cac6ee207869a616e946d355f5b32c1b00121fce
