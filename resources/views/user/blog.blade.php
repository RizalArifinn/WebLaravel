@extends('layouts.layout')
@section('title', 'Laman Blog Saya')
@section('body')

  <div class="panel panel-info">
    <div class="panel-heading">
      @if (session('nama'))
    		<a href='<?= url('/blog/create') ?>' class='btn btn-primary'>
    			<span class="glyphicon glyphicon-folder-open"></span>&nbsp&nbspTambah Data
    		</a>
    	@endif
    </div>

    <div class="panel-body">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Judul Artikel</th>
            <th>Tanggal Dibuat</th>
            <th>Tanggal Update</th>
            <th>Pilihan</th>
          </tr>
        </thead>

        <tbody>
          <?php $no=1; ?>
          @foreach ($user as $users)
            @if ($users->author == session('id'))
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $users->judul ?></td>
            <td><?= $users->created_at ?></td>
            <td><?= $users->updated_at ?></td>
            <td>
              <a href="<?= url('/blog/'.$users->id.'/update') ?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Edit</a>
              <a href="<?= url('/blog/'.$users->id.'/delete') ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
            </td>
          </tr>
          @endif
        @endforeach
        </tbody>
      </table>

	     <a href="<?= url('/blog') ?>" class="btn btn-default" style="margin-top: 15px;">
      <span class="glyphicon glyphicon-log-out"></span> Kembali ke Home
    </a>
  </div>
</div>

@endsection
@section('footer', 'Copyright (c) 2017 Copyright Holder All Rights Reserved.')
