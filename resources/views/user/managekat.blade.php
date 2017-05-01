@extends('layouts.layout')
@section('title', 'Laman Manage Kategori')
@section('body')
    <div class="panel panel-info">
      <div class="panel-heading">
        <h1>Manage Kategori</h1>
      </div>
      <div class="panel-body">
        <a href='<?= url('/managekat/create') ?>' class='btn btn-primary'>
    			<span class="glyphicon glyphicon-folder-open"></span>&nbsp&nbspTambah Kategori
    		</a><hr>
        <table class="table table-striped table-condensed">
          <thead>
            <tr>
              <th>No</th>
              <th>Kategori</th>
              <th>Pilihan</th>
            </tr>
          </thead>

          <tbody>
            <?php $no=1;?>
            @foreach ($kategori as $row)
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $row->nama_kategori ?></td>
              <td>
                <a href="<?= url('/managekat/delete/'.$row->id) ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

@endsection
@section('footer', 'Copyright (c) 2017 Copyright Holder All Rights Reserved.')
