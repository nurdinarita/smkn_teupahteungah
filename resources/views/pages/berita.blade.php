@extends('pages.layouts.main')

@section('container')
<div class="container-fluid">

<section>
<div class="row">
    <div class="col-md-7 mt-4">
        <h4 class="bg-secondary text-center text-light p-1">Berita Sekolah</h4>

        @foreach($berita as $brt)
        <div class="card mb-3">
            <img src="{{ asset('storage/'.$brt->gambar) }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $brt->judul }}</h5>
              <p class="card-text">{{ substr(strip_tags($brt->body),0, 300) }} ... <a href="{{ url('berita/'.$brt->slug) }}" class="text-decoration-none">Selengkapnya</a>
              <p class="card-text"><small class="text-muted">{{ $brt->created_at->format('d/M/Y') }}</small></p>
            </div>
        </div>
      @endforeach
      {{ $berita->links() }}
    </div>
    <div class="col-1"></div>
    <div class="col-md-3 mt-4">
        <h4 class="bg-secondary text-center text-light p-1">Terakhir diupdate</h4>

        @foreach($recentberita as $recent)
        <div class="card" >
          {{-- <img src="..." class="card-img-top" alt="..."> --}}
          <div class="card-body">
            <h6 class="card-title"><a href="{{ url('berita/'.$recent->slug) }}" class="text-decoration-none text-dark">{{ $recent->judul }}</a></h6>
          </div>
        </div>
        @endforeach
    </div>
</div>
</section>
@endsection