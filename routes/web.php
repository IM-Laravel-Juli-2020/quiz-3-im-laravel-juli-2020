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
    return view('image');
});

Route::get('/proyek', 'Proyek@index');
Route::get('/proyek/create', 'Proyek@create');
Route::post('/proyek', 'Proyek@store');
Route::get('/proyek/{id}', 'Proyek@show');
Route::get('/proyek/{id}/edit', 'Proyek@edit');
Route::put('/proyek/{id}', 'Proyek@update');
Route::delete('/proyek/{id}', 'Proyek@destroy');

Route::get('/items/create', 'ItemController@create'); // menampilkan halaman form
Route::post('/items', 'ItemController@store'); // menyimpan data
Route::get('/items', 'ItemController@index'); // menampilkan semua
Route::get('/items/{id}', 'ItemController@show'); // menampilkan detail item dengan id 
Route::get('/items/{id}/edit', 'ItemController@edit'); // menampilkan form untuk edit item
Route::put('/items/{id}', 'ItemController@update'); // menyimpan perubahan dari form edit
Route::delete('/items/{id}', 'ItemController@destroy'); // menghapus data dengan id