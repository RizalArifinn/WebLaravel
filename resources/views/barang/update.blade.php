@extends('layouts.layout')
@section('title', 'Laman Update Data')
@section('heading', 'Update Data Barang')
@section('body')

    @foreach($tampil as $row)
    @endforeach

    <form action="<?= url('/barang/'.$row->id) ?>" method="post">
      <label>Nama Barang : </label>
      <input type="text" class="form-control" name="nama" value="{{$row->nama}}"><br/>

      <label>Deskripsi Barang : </label>
      <textarea name="desk" class="form-control" rows="8" cols="65">{{$row->deskripsi}}</textarea><br/>

      <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
      <a href="<?= url('/barang/'.$row->id) ?>" class="btn btn-default">Batal</a>
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="PUT">
    </form>

@endsection
@section('footer', 'Copyright (c) 2017 Copyright Holder All Rights Reserved.')
