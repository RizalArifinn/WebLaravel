@extends('layouts.layout')
@section('title', 'Laman Manage User')
@section('body')
    <div class="panel panel-info">
      <div class="panel-heading">
        <h1>Manage User</h1>
      </div>

      <div class="panel-body">
        <table class="table table-striped table-condensed">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Alamat</th>
              <th>Pilihan</th>
            </tr>
          </thead>

          <tbody>
            <?php $no=1;?>
            @foreach ($tampil as $row)
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $row->nama ?></td>
              <td><?= $row->email ?></td>
              <td><?= $row->alamat ?></td>
              <td>
                <a href="<?= url('/user/mandit/'.$row->id) ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                <a href="<?= url('/user/delete/'.$row->id) ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

@endsection
@section('footer', 'Copyright (c) 2017 Copyright Holder All Rights Reserved.')
