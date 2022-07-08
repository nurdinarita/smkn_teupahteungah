@extends('pages.layouts.main')

@section('container')
<div class="container-fluid">
<section>
    <div class="row">
        <div class="col-md-12 mt-4">
            <h4 class="bg-secondary text-center text-light p-2">Galeri Sekolah</h4>
        </div>
    </div>
    <div class="row">
      @foreach($galeri as $galeri)
        <div class="col-md-4">
            <div class="card mb-3">
                <img src="{{ asset('storage/'.$galeri->gambar) }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $galeri->judul }}</h5>
                  <p class="card-text">{{ $galeri->deskripsi }}</p>
                  {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                </div>
              </div>
        </div>
      @endforeach
    </div>
</section>
@endsection