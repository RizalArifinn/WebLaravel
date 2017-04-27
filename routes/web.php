<?php

Route::get('/', function () {
    return view('welcome');
});

//ke laman awal/home
Route::get('/blog', 'HomeController@index');

//untuk buat data baru
Route::get('/blog/create', 'WebController@create');
Route::post('/blog/buat', 'WebController@buat');

//untuk menampilkan data
Route::get('/blog/{id}', 'WebController@desc');

//untuk update data
Route::get('/blog/{id}/update', 'WebController@update');
Route::put('/blog/{id}', 'WebController@edit');

//untuk hapus data
Route::get('/blog/{id}/delete', 'WebController@delete');
Route::delete('/blog/{id}', 'WebController@delete');
