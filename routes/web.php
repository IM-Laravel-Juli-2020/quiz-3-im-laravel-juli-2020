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
    return view('sbadmin2.content.index');
});

Route::get('/proyek', 'ProyekController@index'); // menampilkan halaman form
Route::get('/proyek/create', 'ProyekController@create'); // menampilkan halaman form
Route::post('/proyek', 'ProyekController@store');
Route::get('/proyek/{id}', 'ProyekController@show');
Route::get('/proyek/{id}/edit', 'ProyekController@edit');
Route::get('/proyek/{id}/daftarkans-staff', 'ProyekController@daftarstaff');
Route::post('/proyek/{id}/daftarkans-staff', 'ProyekController@storestaff');
Route::put('/proyek/{id}', 'ProyekController@update');
Route::delete('/proyek/{id}', 'ProyekController@destroy');