@extends('layouts.layout')
@section('title', 'Laman Home')
@section('heading')
	<a href='<?= url('/barang/create') ?>' class='btn btn-primary'>
		<span class="glyphicon glyphicon-folder-open"></span>&nbsp&nbspTambah Data
	</a>
@endsection
@section('body')

	  @foreach ($tampil as $row)
      <a href="<?= url('/barang/'.$row->id) ?>"><h2>{{ $row->nama }}</h2></a><hr>
      {{ substr($row->deskripsi,0,700).'...' }}<br>
			<a href="<?= url('/barang/'.$row->id) ?>" class="btn btn-info" style="margin-top: 15px;">
				<span class="glyphicon glyphicon-log-in"></span> Lihat Lebih Lanjut
			</a>
			<hr><hr>

	 @endforeach
@endsection
@section('pagination')
	<div class="col-md-6">
		{!! $tampil->render() !!}
	</div>
@endsection
@section('footer', 'Copyright (c) 2017 Copyright Holder All Rights Reserved.')
