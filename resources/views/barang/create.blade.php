@extends('layouts.layout')
@section('title', 'Laman Buat Data')
@section('body')
@section('heading', 'Tambah Data')

    <form action="<?= url('/barang/buat') ?>" method="post">
      <label>Nama Barang : </label>
      <input type="text" name="nama" class="form-control"><br/>

      <label>Deskripsi Barang : </label>
      <textarea name="desk" rows="8" cols="65" class="form-control"></textarea><br/>

      {{ csrf_field() }}
      <input type="submit" name="submit" value="Tambah" class="btn btn-primary">
      <a href="<?= url('/barang') ?>" class="btn btn-default">Batal</a>
    </form>

@endsection
@section('footer', 'Copyright (c) 2017 Copyright Holder All Rights Reserved.')
