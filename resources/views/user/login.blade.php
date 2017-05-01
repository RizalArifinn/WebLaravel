@extends('layouts.layout')
@section('title', 'Laman Login')
@section('body')

  <div class="panel panel-info">
    <div class="panel-heading">
      <h5>Masuk</h5>
    </div>

    <div class="panel-body">
      <form action="<?= url('/user/masuk') ?>" method="post">
        <div class="form-group">
          @if ($errors->has('email'))
            {{ $errors->first('email') }}.<br>
          @endif
          <input type="email" name="email" class="form-control" placeholder="Masukkan Email">
        </div>

        <div class="form-group">
          @if ($errors->has('password'))
            {{ $errors->first('password') }}.<br>
          @endif
          <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
        </div>

        {{ csrf_field() }}
        <input type="submit" name="submit" value="Masuk" class="btn btn-primary">
        <a href="<?= url('/blog') ?>" class="btn btn-default">Batal</a><br><br>
        <p>Belum Punya Akun? <a href="<?= url('user/register')?>">Daftar</a></p>
      </form>
    </div>
  </div>

@endsection
@section('footer', 'Copyright (c) 2017 Copyright Holder All Rights Reserved.')
