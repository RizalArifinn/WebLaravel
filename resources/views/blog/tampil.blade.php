@extends('layouts.layout')
@section('title', 'Laman Tampilan Barang')
@section('body')

  <div class="panel panel-info">
    <div class="panel-heading">
      <h5>Detail Artikel</h5>
    </div>

    <div class="panel-body">
      @foreach ($author as $thor)
        @if ($tampil->author == $thor->id)
        <h2>{{ $tampil->judul }}</h2>
        <p class="small"><span class="label label-success">{{$thor->nama}}</span> {{$tampil->created_at}}</p><hr>
        {{ $tampil->deskripsi }}
        @endif
      @endforeach

    	<br/><br/>
    	<a href="<?= url('/blog') ?>" class="btn btn-default" style="margin-top: 15px;">
        <span class="glyphicon glyphicon-log-out"></span> Kembali ke Laman Awal
      </a>
    </div>
  </div>

@endsection
@section('footer', 'Copyright (c) 2017 Copyright Holder All Rights Reserved.')
