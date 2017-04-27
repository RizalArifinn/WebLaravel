@extends('layouts.layout')
@section('title', 'Laman Buat Data')
@section('body')
@section('heading', 'Tambah Data')

    <form action="<?= url('/blog/buat') ?>" method="post">
      <label>Judul Artikel : </label>
      <input type="text" name="judul" class="form-control"><br/>

      <label>Deskripsi Artikel : </label>
      <textarea name="desk" rows="8" cols="65" class="form-control"></textarea><br/>

      {{ csrf_field() }}
      <input type="submit" name="submit" value="Tambah" class="btn btn-primary">
      <a href="<?= url('/blog') ?>" class="btn btn-default">Batal</a>
    </form>

@endsection
@section('footer', 'Copyright (c) 2017 Copyright Holder All Rights Reserved.')
