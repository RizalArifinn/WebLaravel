<?php

Route::get('/', function () {
    return view('welcome');
});

//register
Route::get('/user/register', 'UserController@register');
Route::post('/user/daftar', 'UserController@daftar');

//login
Route::get('/user/login', 'UserController@login');
Route::post('/user/masuk', 'UserController@masuk');

//logout
Route::get('/user/logout', 'UserController@logout');

//profil
Route::get('/user/profil', 'UserController@profil');

//admin manage
Route::get('/admin/manage', 'UserController@manage');

//manage kat
Route::get('/admin/managekat', 'UserController@managekat');

//manage kat tambah
Route::get('/managekat/create', 'UserController@managekatcreate');
Route::post('/managekat/buat', 'UserController@managekatbuat');

//managekat delete
Route::get('/managekat/delete/{id}', 'UserController@managekatdelete');
Route::post('/managekat/konfirdel/{id}', 'UserController@managekatkonfirdel');

//filter kategori
Route::get('/kategori/{id}', 'UserController@kategori');

//blog saya
Route::get('/user/blog/{id}', 'UserController@blogsaya');

//edit manage
Route::get('/user/mandit/{id}', 'UserController@edman');
Route::post('/user/resman/{id}', 'UserController@resultmanage');

//manage delete user
Route::get('/user/delete/{id}', 'UserController@delete');
Route::post('/user/condelete/{id}', 'UserController@condelete');

//edit profil
Route::get('/user/update/{id}', 'UserController@update');
Route::post('/user/edit/{id}', 'UserController@edit');

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
