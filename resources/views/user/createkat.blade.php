@extends('layouts.layout')
@section('title', 'Laman Buat Kategori')
@section('body')

  <div class="panel panel-info">
    <div class="panel-heading">
      <h5>Tambah Kategori</h5>
    </div>

    <div class="panel-body">
      <form action="<?= url('/managekat/buat') ?>" method="post">
        <div class="form-group">
          <label>Nama Kategori : </label><br>
          @if ($errors->has('kategori'))
            {{ $errors->first('kategori') }}.<br>
          @endif
          <input type="text" name="kategori" class="form-control" value="{{old('kategori')}}">
        </div>

        {{ csrf_field() }}
        <input type="submit" name="submit" value="Tambah" class="btn btn-primary">
        <a href="<?= url('/admin/managekat') ?>" class="btn btn-default">Batal</a>
      </form>
    </div>
  </div>

@endsection
@section('footer', 'Copyright (c) 2017 Copyright Holder All Rights Reserved.')
