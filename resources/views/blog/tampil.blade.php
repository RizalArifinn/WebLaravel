@extends('layouts.layout')
@section('title', 'Laman Tampilan Barang')
@section('heading', "Penjelasan Barang")
@section('body')

  <h2>{{ $tampil->judul }}</h2><hr>
  {{ $tampil->deskripsi }}

	<br/><br/>
  <a href="<?= url('/blog/'.$tampil->id.'/update') ?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Edit</a>
  <a href="<?= url('/blog/'.$tampil->id.'/delete') ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
  <br/>
	<a href="<?= url('/blog') ?>" class="btn btn-default" style="margin-top: 15px;">
    <span class="glyphicon glyphicon-log-out"></span> Kembali ke Laman Awal
  </a>

@endsection
@section('footer', 'Copyright (c) 2017 Copyright Holder All Rights Reserved.')
