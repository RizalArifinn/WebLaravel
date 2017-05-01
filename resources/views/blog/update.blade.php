@extends('layouts.layout')
@section('title', 'Laman Edit Data')
@section('body')

  <div class="panel panel-info">
    <div class="panel-heading">
      <h5>Edit Artikel</h5>
    </div>

    <div class="panel-body">
      <form action="<?= url('/blog/'.$tampil->id) ?>" method="post">
        <div class="form-group">
          <label>Judul Artikel : </label><br>
          @if ($errors->has('judul'))
            {{ $errors->first('judul') }}.<br>
          @endif
          <input type="text" class="form-control" name="judul" value="{{$tampil->judul}}"><br/>
        </div>

        <div class="form-group">
          <label>Kategori Artikel : </label><br>
          <select class="form-control" name="kategori">
            @foreach ($kategori as $kat)
              @if ($tampil->id_kategori == $kat->id)
                <option value="{{$kat->id}}" selected>{{$kat->nama_kategori}}</option>
              @else
                <option value="{{$kat->id}}">{{$kat->nama_kategori}}</option>
              @endif
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label>Deskripsi Artikel : </label><br>
          @if ($errors->has('desk'))
            {{ $errors->first('desk') }}.<br>
          @endif
          <textarea name="desk" class="form-control" rows="8" cols="65">{{$tampil->deskripsi}}</textarea><br/>
        </div>

        <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
        <a href="<?= url('/user/blog/'.$tampil->id) ?>" class="btn btn-default">Batal</a>
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
      </form>
    </div>
  </div>

@endsection
@section('footer', 'Copyright (c) 2017 Copyright Holder All Rights Reserved.')
