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

Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::post('/pertanyaan', 'PertanyaanController@save');
Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index');
Route::get('/jawaban/create/{pertanyaan_id}', 'JawabanController@create');
Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@save');