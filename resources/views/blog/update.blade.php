@extends('layouts.layout')
@section('title', 'Laman Update Data')
@section('heading', 'Update Data Barang')
@section('body')

    <form action="<?= url('/blog/'.$tampil->id) ?>" method="post">
      <label>Judul Artikel : </label>
      <input type="text" class="form-control" name="judul" value="{{$tampil->judul}}"><br/>

      <label>Deskripsi Artikel : </label>
      <textarea name="desk" class="form-control" rows="8" cols="65">{{$tampil->deskripsi}}</textarea><br/>

      <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
      <a href="<?= url('/blog/'.$tampil->id) ?>" class="btn btn-default">Batal</a>
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="PUT">
    </form>

@endsection
@section('footer', 'Copyright (c) 2017 Copyright Holder All Rights Reserved.')
