@extends('admin.layouts.main')

@section('container')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Detail Struktur</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Tahun : {{ $struktur->tahun }}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <img src="{{ asset('storage/'.$struktur->gambar) }}" class="img-thumbnail">
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>
@endsection