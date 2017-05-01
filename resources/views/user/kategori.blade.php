@extends('layouts.layout')
@section('title', 'Filter Kategori')
@section('body')
		<div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="row">
						@foreach ($tampil as $row)
							@foreach ($author as $thor)
								@if ($row->author == $thor->id)
            			<div class="col-xs-6 col-lg-4">
                    <h2> <a href="<?= url('/blog/'.$row->id) ?>">{{ $row->judul }}</a></h2>
										<p class="small"><span class="label label-success">{{$thor->nama}}</span> {{$row->created_at}}</p><hr>
              			<p>{{ substr($row->deskripsi,0,100).'...' }}</p>
              			<p><a class="btn btn-primary" href="<?= url('/blog/'.$row->id) ?>" role="button">Lihat Selengkapnya &raquo;</a></p>
            			</div><!--/.col-xs-6.col-lg-4-->
								@endif
							@endforeach
						@endforeach
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3>Kategori</h3>
							</div>
							<div class="panel-body">
								@foreach($kategori as $kat)
                  @if ($id == $kat->id)
									  <a href="<?= url('/kategori/'.$kat->id) ?>" class="list-group-item active">{{$kat->nama_kategori}}</a>
                  @else
                    <a href="<?= url('/kategori/'.$kat->id) ?>" class="list-group-item">{{$kat->nama_kategori}}</a>
                  @endif
								@endforeach
							</div>
						</div>
          </div>
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->

      <hr>
@endsection
@section('footer')
      <footer>
        <p>&copy; 2016 Company, Inc.</p>
      </footer>
@endsection
</div><!--/.container-->
