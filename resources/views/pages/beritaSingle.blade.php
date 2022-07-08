@extends('pages.layouts.main')

@section('container')
<div class="container-fluid">

<div class="card m-5">
    <img src="{{ asset('storage/'.$berita->gambar) }}" class="img-fluid" style="height: 450px;">
    <div class="card-body">
      <h5 class="card-title">{{ $berita->judul }}</h5>
      <p class="card-text">{!! $berita->body !!}</p>
    </div>
  </div>
@endsection