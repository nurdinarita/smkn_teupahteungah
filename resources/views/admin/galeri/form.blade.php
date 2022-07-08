@extends('admin.layouts.main')

@section('container')
<div class="row">
    <div class="col-md-12">
      <div class="card card-outline card-info">
        <div class="card-header">
          <h3 class="card-title">
            {{ isset($galeri) ? 'Edit Galeri Sekolah' : 'Tambah Galeri Sekolah' }}
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <form action="{{ isset($galeri) ? url('admin/galeri/'.$galeri->id) : url('admin/galeri/') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if(isset($galeri))
            @method('patch')
            @endif
            <div class="mb-1">
              <label for="judul">Judul</label>
              <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul" value="{{ isset($galeri) ? $galeri->judul : old('judul') }}" required>
            </div>
            <div class="mb-1">
              <label for="gambar">Gambar</label>
              @if(isset($galeri))
                <br>
                <img src="{{ asset('storage/'.$galeri->gambar) }}" alt="" class="img-thumbnail" width="200px">
              @endif
              <input type="file" class="form-control" name="gambar" id="gambar" {{ isset($galeri) ? '' : 'required' }}>
            </div>
            <div class="mb-1">
              <label>Deskripsi singkat</label>
              <textarea  name="deskripsi" class="form-control" row="10" required>{{ isset($galeri) ? $galeri->deskripsi : old('deskripsi') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
      </div>
    </div>
    <!-- /.col-->
</div>

@endsection
