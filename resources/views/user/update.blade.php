@extends('layouts.layout')
@section('title', 'Laman Edit Profil')
@section('body')

  <div class="panel panel-info">
    <div class="panel-heading">
      <h5>Edit Profil</h5>
    </div>

    <div class="panel-body">
      <form action="<?= url('/user/edit/'.$edit->id) ?>" method="post">
        <div class="form-group">
          <label>Nama : </label><br>
          @if ($errors->has('nama'))
            {{ $errors->first('nama') }}.<br>
          @endif
          <input type="text" class="form-control" name="nama" value="{{$edit->nama}}">
        </div>

        <div class="form-group">
          <label>Email : </label><br>
          @if ($errors->has('email'))
            {{ $errors->first('email') }}.<br>
          @endif
          <input type="email" class="form-control" name="email" value="{{$edit->email}}">
          <input type="hidden" class="form-control" name="emailLama" value="{{$edit->email}}">
        </div>

        <div class="form-group">
          <label>Password Baru : </label><br>
          @if ($errors->has('password'))
            {{ $errors->first('password') }}.<br>
          @endif
          <input type="password" class="form-control" name="passwordBaru">
        </div>

        <div class="form-group">
          <label>Konfirmasi Password : </label><br>
          @if ($errors->has('password'))
            {{ $errors->first('password') }}.<br>
          @endif
          <input type="password" class="form-control" name="Konpassword">
        </div>

        <div class="form-group">
          <label>Alamat : </label><br>
          @if ($errors->has('alamat'))
            {{ $errors->first('alamat') }}.<br>
          @endif
          <textarea name="alamat" class="form-control" rows="8" cols="65">{{$edit->alamat}}</textarea>
        </div>

        <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
        <a href="<?= url('/user/profil') ?>" class="btn btn-default">Batal</a>
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="POST">
      </form>
    </div>
  </div>

@endsection
@section('footer', 'Copyright (c) 2017 Copyright Holder All Rights Reserved.')
