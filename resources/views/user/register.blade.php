@extends('layouts.layout')
@section('title', 'Laman Register')
@section('body')

  <div class="panel panel-info">
    <div class="panel-heading">
      <h5>Daftar</h5>
    </div>

    <div class="panel-body">
      <form action="<?= url('/user/daftar') ?>" method="post">
        <label>Masukkan Nama : </label><br>
        @if ($errors->has('nama'))
          {{ $errors->first('nama') }}.<br>
        @endif
        <input type="text" name="nama" class="form-control" value="{{old('nama')}}"><br/>

        <label>Masukkan Email : </label><br>
        @if ($errors->has('email'))
          {{ $errors->first('email') }}.<br>
        @endif
        <input type="email" name="email" class="form-control" value="{{old('email')}}"><br/>

        <label>Masukkan Password : </label><br>
        @if ($errors->has('password'))
          {{ $errors->first('password') }}.<br>
        @endif
        <input type="password" name="password" class="form-control" value="{{old('password')}}"><br/>

        <label>Masukkan Alamat : </label><br>
        @if ($errors->has('alamat'))
          {{ $errors->first('alamat') }}.<br>
        @endif
        <textarea name="alamat" rows="8" cols="65" class="form-control">{{old('alamat')}}</textarea><br/>

        {{ csrf_field() }}
        <input type="submit" name="submit" value="Daftar" class="btn btn-primary">
        <a href="<?= url('/user/login') ?>" class="btn btn-default">Batal</a>
      </form>
    </div>
  </div>

@endsection
@section('footer', 'Copyright (c) 2017 Copyright Holder All Rights Reserved.')
