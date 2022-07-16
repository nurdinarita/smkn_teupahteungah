@extends('admin.layouts.main')

@section('container')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Detail Berita</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">{{ $berita->judul }}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <img src="{{ asset('storage/'.$berita->gambar) }}" class="img-thumbnail" width="400px">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>{!! $berita->body !!}</p>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>
@endsection