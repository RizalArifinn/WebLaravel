@extends('layouts.layout')
@section('title', 'Konfirmasi Data')
@section('body')

  <div class="container">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h5>Konfimasi</h5>
      </div>

      <div class="panel-body">
        <dl class="dl-horizontal">
          <h3>Konfirmasi Hapus <i>"{{$delete->nama_kategori}}"</i></h3>
          <p>Anda Yakin Ingin Menghapusnya?</p>
          <i><p>Jika anda menghapusnya, Blog yang tercakup dengan kategori ini akan hilang</p></i>
        </dl>
        <form method="post" action="/managekat/konfirdel/{{$delete->id}}">
          <div class="col-md-1"></div>
          <input type="submit" name="submit" value="Ya" class="btn btn-danger">
          <input type="submit" name="submit" value="Tidak" class="btn btn-default">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="POST">
        </form>
      </div>
    </div>
  </div>

@endsection
@section('footer', 'Copyright (c) 2017 Copyright Holder All Rights Reserved.')
