<!doctype html>
<html lang="id">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{ url('favicon.ico') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/fontawesome-free-6.1.1/css/all.min.css') }}" rel="stylesheet">
    <title>SMKN TEUPAH TEUNGAH</title>
  </head>

  <style>
    nav{
      font-size: 20px;
    }
  </style>
  <body>
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1 p-3">
          <img src="{{ asset('assets/img/logo.png') }}" style="width:80px;">
        </div>
        <div class="col-md-4 p-3">
          <h2>SMKN 1 TEUPAH TENGAH</h2>
          <p class="text-muted">TENGKU DIUJUNG KM. 11 NO. 56 SINABANG - LASIKIN, KEC. TEUPAH TENGAH</p>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-4 p-3">
          <p class="mt-4"><i class="fa-solid fa-phone"></i> +62 812 3224 4035</p>
          <p><i class="fa-solid fa-envelope"></i> smkn1teupahtengah2018@gmail.com</p>
        </div>
      </div>
    </div>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container">
        {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('/') ? 'active' : '' }} px-3" aria-current="page" href="{{ url('/') }}">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('profil') ? 'active' : '' }} px-3" href="{{ url('/profil') }}">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('galeri') ? 'active' : '' }} px-3" href="{{ url('/galeri') }}">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{  Request::is('berita') ? 'active' : '' }} px-3" href="{{ url('/berita') }}">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{  Request::is('fasilitas') ? 'active' : '' }} px-3" href="{{ url('/fasilitas') }}">Fasilitas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{  Request::is('dewan-guru') ? 'active' : '' }} px-3" href="{{ url('/dewan-guru') }}">Dewan Guru</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{  Request::is('alumni') ? 'active' : '' }} px-3" href="{{ url('/alumni') }}">Alumni</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{  Request::is('pendaftaran') ? 'active' : '' }} px-3" href="{{ url('/pendaftaran') }}">Pendaftaran</a>
            </li>
          </ul>
          <div class="d-flex nav-item">
            <a class="nav-link me-2" href="{{ url('/login') }}" style="color: rgb(207, 207, 207);">Login</a>
          </div>
        </div>
      </div>
    </nav>
    {{-- End Navbar --}}    

      @yield('container')

      <footer class="mt-5 text-light">
        <div class="row">
          <div class="col-md-12 bg-dark">
            <p class="text-center p-2"><i class="fa-solid fa-copyright"></i> Copyright 2022</p>
          </div>
        </div>
      </footer>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>