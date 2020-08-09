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
