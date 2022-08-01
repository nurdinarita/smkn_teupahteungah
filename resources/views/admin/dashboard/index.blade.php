@extends('admin.layouts.main')

@section('container')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{ isset($guru) ? $guru : '0' }}</h3>

            <p>Dewan Guru</p>
          </div>
          <div class="icon">
            <i class="nav-icon fas fa-users"></i>
          </div>
          <a href="{{ url('/admin/guru') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ isset($alumni) ? $alumni : '0' }}</h3>

            <p>Alumni</p>
          </div>
          <div class="icon">
            <i class="nav-icon fas fa-user-graduate"></i>
          </div>
          <a href="{{ url('/admin/alumni') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{ isset($berita) ? $berita : '0' }}</h3>

            <p>Berita Sekolah</p>
          </div>
          <div class="icon">
            <i class="nav-icon far fa-calendar-alt"></i>
          </div>
          <a href="{{ url('/admin/berita') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{ isset($galeri) ? $galeri : '0' }}</h3>

            <p>Kegiatan Sekolah</p>
          </div>
          <div class="icon">
            <i class="nav-icon far fa-image"></i>
          </div>
          <a href="{{ url('/admin/galeri') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">

    </div>
    <!-- /.row (main row) -->
</div><!-- /.container-fluid -->
@endsection