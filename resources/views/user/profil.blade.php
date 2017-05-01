@extends('layouts.layout')
@section('title', 'Laman Profil')
@section('body')

  <div class="container-fluid">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h5>Profil {{$profil->nama}}</h5>
      </div>

      <div class="panel-body">
        <dl class="dl-horizontal">
          <dt>Nama :</dt>
            <dd>{{$profil->nama}}</dd>
          <dt>Email :</dt>
            <dd>{{$profil->email}}</dd>
          <dt>Alamat :</dt>
            <dd>{{$profil->alamat}}</dd>
        </dl>
        <form method="post">
          <div class="col-md-1"></div>
          <a href="<?= url('/user/update/'.$profil->id) ?>" class="btn btn-primary">
            <span class="glyphicon glyphicon-edit"></span> Edit Profil
          </a>
          <a href="<?= url('/blog') ?>" class="btn btn-default">
            <span class="glyphicon glyphicon-log-out"></span> Kembali Ke Home
          </a>
        </form>
      </div>
    </div>
  </div>

@endsection
@section('footer', 'Copyright (c) 2017 Copyright Holder All Rights Reserved.')
