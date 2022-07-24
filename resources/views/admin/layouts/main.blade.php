<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{ url('favicon.ico') }}" type="image/x-icon">
  <title>{{ $title }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
  <!-- Toast Alert -->
  <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">{{ $title }}</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li>
            <form action="{{ route('logout') }}" method="post">@csrf
                <button type="submit" class="btn"><i class="fas fa-sign-out-alt"></i>Logout</button>
            </form>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
      <img src="{{ asset('assets/img/logo.png') }}" alt="Admin" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">ADMIN Pages</span>
    </a>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">PROFIL SEKOLAH</li>
          <li class="nav-item">
            <a href="{{ url('admin/profil') }}" class="nav-link {{ Request::is('admin/profil') || $title === 'Edit Profil' ? 'active' : '' }}">
              <i class="nav-icon fas fa-school"></i>
              <p>
                Profil
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/visi-misi') }}" class="nav-link {{ Request::is('admin/visi-misi') || $title === 'Edit Visi Dan Misi' ? 'active' : '' }}">
              <i class="nav-icon fas fa-chalkboard"></i>
              <p>
                Visi Dan Misi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/struktur-organisasi') }}" class="nav-link {{ Request::is('admin/struktur-organisasi') || $title == 'Tambah Struktur Organisasi' || $title == 'Edit Struktur Organisasi' || $title == 'Detail Struktur Organisasi' ? 'active' : '' }}">
                <i class="nav-icon fas fa-sitemap"></i>
              <p>
                Struktur Organisasi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/guru') }}" class="nav-link {{ Request::is('admin/guru') || $title == 'Tambah Data Guru' || $title == 'Edit Data Guru' ? 'active' : '' }}">
                <i class="nav-icon fas fa-users"></i>
              <p>
                Data Guru
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/fasilitas') }}" class="nav-link {{ Request::is('admin/fasilitas') || $title == 'Tambah Fasilitas' || $title == 'Edit Fasilitas' ? 'active' : '' }}">
                <i class="nav-icon fas fa-building"></i>
              <p>
                Fasilitas Sekolah
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/alumni') }}" class="nav-link {{ Request::is('admin/alumni') || $title == 'Tambah Data Alumni' || $title == 'Edit Data Alumni' ? 'active' : '' }}">
                <i class="nav-icon fas fa-user-graduate"></i>
              <p>
                Alumni
              </p>
            </a>
          </li>

          <li class="nav-header">Berita Dan Galeri</li>
          <li class="nav-item">
            <a href="{{ url('admin/berita') }}" class="nav-link {{ Request::is('admin/berita') || $title === 'Edit Berita Sekolah' || $title === 'Tambah Berita Sekolah' || $title === 'Detail Berita' ? 'active' : '' }}">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Berita Sekolah
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/galeri') }}" class="nav-link {{ Request::is('admin/galeri') || $title === 'Tambah Galeri Sekolah' || $title === 'Edit Galeri Sekolah' ? 'active' : '' }}">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>

          <li class="nav-header">Advance</li>
          <li class="nav-item">
            <a href="{{ url('admin/pendaftaran') }}" class="nav-link {{ Request::is('admin/pendaftaran') || $title === 'Edit Pendaftaran' || $title === 'Tambah Pendaftaran' ? 'active' : '' }}">
              {{-- <i class="nav-icon far fa-calendar-alt"></i> --}}
              <i class="nav-icon fas fa-clipboard"></i>
              <p>
                Pendaftaran
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/slider') }}" class="nav-link {{ Request::is('admin/slider') || $title === 'Edit Gambar Slider' || $title === 'Tambah Gambar Slider' ? 'active' : '' }}">
              {{-- <i class="nav-icon far fa-calendar-alt"></i> --}}
              <i class="nav-icon fas fa-photo-video"></i>
              <p>
                Gambar Slider
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{ $title }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        @yield('container')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->



<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{ asset('dist/js/demo.js') }}"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>

<!-- DataTables  & Plugins -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- Page specific script -->
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
</script>

<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
    $(function () {
      // Summernote
      $('#summernote').summernote()
  
      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
      });
    })
    $(function () {
      // Summernote
      $('#summernotevisi').summernote()
  
      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
      });
    })
    $(function () {
      // Summernote
      $('#summernotemisi').summernote()
  
      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
      });
    })
</script>

{{-- Alert --}}
<script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>

@if (session('status'))
<script>
  toastr.success('{{ session('status') }}')
</script>
@endif
      
@yield('script-hapus')
@yield('slug')
</body>
</html>
