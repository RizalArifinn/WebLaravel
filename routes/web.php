<?php

Route::get('/', function () {
    return view('welcome');
});

//ke laman awal/home
Route::get('/barang', 'HomeController@index');

//untuk buat data baru
Route::get('/barang/create', 'WebController@create');
Route::post('/barang/buat', 'WebController@buat');

//untuk menampilkan data
Route::get('/barang/{id}', 'WebController@desc');

//untuk update data
Route::get('/barang/{id}/update', 'WebController@update');
Route::put('/barang/{id}', 'WebController@edit');

//untuk hapus data
Route::get('/barang/{id}/delete', 'WebController@delete');
Route::delete('/barang/{id}', 'WebController@delete');
