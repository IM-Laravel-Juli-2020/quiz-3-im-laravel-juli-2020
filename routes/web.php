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
    return view('contents.index');
});

Route::get('/items/create', 'ProyeksController@create'); // menampilkan halaman form
Route::post('/items', 'ProyeksController@store'); // menyimpan data
Route::get('/items', 'ProyeksController@index'); // menampilkan semua
Route::get('/items/{id}', 'ProyeksController@show'); // menampilkan detail item dengan id 
Route::get('/items/{id}/edit', 'ProyeksController@edit'); // menampilkan form untuk edit item
Route::put('/items/{id}', 'ProyeksController@update'); // menyimpan perubahan dari form edit
Route::delete('/items/{id}', 'ProyeksController@destroy'); // menghapus data dengan id