@extends('pages.layouts.main')


@section('container')
@include('pages.layouts.slider')

<div class="container-fluid">
<section id="sambutanKepalaSekolah">
    <div class="row">
      <div class="col-md-7 mt-4">
        <h4 class="bg-secondary text-center text-white p-1">Sambutan Kepala Sekolah</h4>
      </div>
      <div class="col-1"></div>
      <div class="col-md-3 mt-4">
        <h4 class="bg-secondary text-center text-white p-1">Video Profil Sekolah</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7">
        <p>
          Perkembangan teknologi informasi sangat pesat. Perkembangan tersebut didukung oleh semakin banyaknya pengguna internet. 
        </p>
        <p>
          Maka sekolah tentu harus terus mengikuti perkembangan tersebut. Sebagai sarana informasi dan komunikasi sekolah, maka kami meluncurkan situs resmi sekolah dengan nama website : smknteupahteungah.sch.id 
        </p>
        <p>
          Kami sampaikan terima kasih kepada tim yang telah membantu membuat website ini dengan baik. Harapan kami bahwa website ini akan terus berkembang penggunanya sebagai saran informasi yang menunjang dunia pendidikan.
        </p>
      </div>
      <div class="col-1"></div>
      <div class="col-md-4">
        <iframe width="312" height="210" src="https://www.youtube.com/embed/i8n1gSw_o_8"></iframe>
      </div>
    </div>
</section>

<section id="beritaTerbaru">
    <div class="row">
      <div class="col-md-7 mt-4">
        <h4 class="bg-secondary text-center text-white p-1">Berita Terbaru</h4>
      </div>
      <div class="col-1"></div>
      <div class="col-md-3 mt-4">
        <h4 class="bg-secondary text-center text-white p-1">Terakhir diupdate</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7">
        @foreach ($berita as $berita)
        <div class="card mb-3" style="max-width: 100%;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{ asset('storage/'.$berita->gambar) }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">{{ $berita->judul }}</h5>
                <p class="card-text">{{ substr(strip_tags($berita->body),0, 100) }}... <a href="{{ url('berita/'.$berita->slug) }}" class="text-decoration-none">Selengkapnya</a></p>
                <p class="card-text"><small class="text-muted">{{ $berita->created_at->format('d/M/Y') }}</small></p>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      
      <div class="col-1"></div>
      <div class="col-md-3">
        @foreach ($recentberita as $recent)
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
<section>
    <div class="row">
      <div class="col-md-7 mt-4">
        <h4 class="bg-secondary text-center text-white p-1">Kegiatan Sekolah</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            @foreach($galeri as $galeri)
            <div class="carousel-item {{ $loop->iteration === 1 ? 'active' : '' }}">
              <img src="{{ asset('storage/'.$galeri->gambar) }}" class="d-block w-100">
              <div class="carousel-caption d-none d-md-block">
                <h5>{{ $galeri->judul }}</h5>
                <p>{{ $galeri->deskripsi }}</p>
              </div>
            </div>
            @endforeach
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
</section>
@endsection