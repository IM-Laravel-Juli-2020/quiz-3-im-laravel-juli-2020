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

Route::get('/', 'KaryawanController@image'); 
Route::get('/proyek', 'KaryawanController@index'); 
Route::get('/proyek/create', 'KaryawanController@create'); 
Route::post('/proyek', 'KaryawanController@store'); 
Route::get('/proyek/{id}/daftarkan-staff', 'KaryawanController@showStaff'); 
Route::post('/proyek/{id}/daftarkan-staff', 'KaryawanController@saveStaff'); 
Route::get('/artikel/{id}/edit', 'KaryawanController@edit'); 
Route::put('/proyek/{id}', 'KaryawanController@update'); 
Route::delete('/proyek/{id}', 'KaryawanController@delete'); 
