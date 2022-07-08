<!doctype html>
<html lang="id">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
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
          <h2>SMKN TEUPAH TEUNGAH</h2>
          <p class="text-muted">TENGKU DIUJUNG KM. 11 NO. 56 SINABANG - LASIKIN, KEC. TEUPAH TENGAH</p>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-4 p-3">
          <p class="mt-4"><i class="fa-solid fa-phone"></i> +62 852 7505 4619</p>
          <p><i class="fa-solid fa-envelope"></i> smknteupahteungah@gmail.com</p>
        </div>
      </div>
    </div>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-5" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }} px-3" aria-current="page" href="{{ url('/') }}">Beranda</a>
            <a class="nav-link {{ Request::is('profil') ? 'active' : '' }} px-3" href="{{ url('/profil') }}">Profil</a>
            <a class="nav-link {{ Request::is('galeri') ? 'active' : '' }} px-3" href="{{ url('/galeri') }}">Galeri</a>
            <a class="nav-link {{  Request::is('berita') ? 'active' : '' }} px-3" href="{{ url('/berita') }}">Berita</a>
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