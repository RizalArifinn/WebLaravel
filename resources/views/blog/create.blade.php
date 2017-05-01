@extends('layouts.layout')
@section('title', 'Laman Buat Data')
@section('body')
@section('heading', 'Tambah Data')

    <form action="<?= url('/blog/buat') ?>" method="post">
      <div class="form-group">
        <label>Judul Artikel : </label><br>
        @if ($errors->has('judul'))
          {{ $errors->first('judul') }}.<br>
        @endif
        <input type="text" name="judul" class="form-control" value="{{old('judul')}}">
      </div>

      <div class="form-group">
        <label>Kategori Artikel : </label><br>
        <select class="form-control" name="kategori">
          @foreach($kategori as $kat)
            <option value="{{$kat->id}}">{{$kat->nama_kategori}}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label>Deskripsi Artikel : </label><br>
        @if ($errors->has('desk'))
          {{ $errors->first('desk') }}.<br>
        @endif
        <textarea name="desk" rows="8" cols="65" class="form-control">{{old('desk')}}</textarea>
      </div>

      {{ csrf_field() }}
      <input type="submit" name="submit" value="Tambah" class="btn btn-primary">
      <a href="<?= url('/blog') ?>" class="btn btn-default">Batal</a>
    </form>

@endsection
@section('footer', 'Copyright (c) 2017 Copyright Holder All Rights Reserved.')
