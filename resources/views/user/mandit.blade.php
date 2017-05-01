@extends('layouts.layout')
@section('title', 'Laman Edit Manage')
@section('body')

  <div class="panel panel-info">
    <div class="panel-heading">
      <h5>Edit Manage User</h5>
    </div>

    <div class="panel-body">
      <form action="<?= url('/user/resman/'.$edit->id) ?>" method="post">
        <div class="form-group">
          <label>Nama : </label><br>
          @if ($errors->has('nama'))
            {{ $errors->first('nama') }}.<br>
          @endif
          <input type="text" class="form-control" name="nama" value="{{$edit->nama}}" readonly>
        </div>

        <div class="form-group">
          <label>Email : </label><br>
          @if ($errors->has('email'))
            {{ $errors->first('email') }}.<br>
          @endif
          <input type="email" class="form-control" name="email" value="{{$edit->email}}" readonly>
          <input type="hidden" class="form-control" name="emailLama" value="{{$edit->email}}">
        </div>

        <div class="form-group">
          <label>Alamat : </label><br>
          @if ($errors->has('alamat'))
            {{ $errors->first('alamat') }}.<br>
          @endif
          <textarea name="alamat" class="form-control" rows="8" cols="65" readonly>{{$edit->alamat}}</textarea>
        </div>

        <div class="form-group">
          @if (session('status') == 1)
            <label>Status : </label>
            <div class="form-group">
              <select name="status" class="form-control">
                @if ($edit->status == 0)
                  <option value="0" selected>Member</option>
                  <option value="1">Admin</option>
                @else
                  @if (session('id') != $edit->id)
                    <option value="0" disabled>Member</option>
                    <option value="1" selected disabled>Admin</option>
                    <input type="hidden" name="status" class="form-control" value="{{ $edit->status }}">
                  @else
                    <option value="0">Member</option>
                    <option value="1" selected>Admin</option>
                  @endif
                @endif
              </select>
            </div>
          @else
              <input type="hidden" name="status" value="{{$edit->status}}">
          @endif
        </div>

        <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
        <a href="<?= url('/admin/manage') ?>" class="btn btn-default">Batal</a>
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="POST">
      </form>
    </div>
  </div>

@endsection
@section('footer', 'Copyright (c) 2017 Copyright Holder All Rights Reserved.')
