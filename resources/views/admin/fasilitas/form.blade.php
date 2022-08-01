@extends('admin.layouts.main')

@section('container')
<div class="row">
    <div class="col-md-12">
      <div class="card card-outline card-info">
        <div class="card-header">
          <h3 class="card-title">
            {{ isset($fasilitas) ? 'Edit Fasilitas' : 'Tambah Fasilitas' }}
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <form action="{{ isset($fasilitas) ? url('admin/fasilitas/'.$fasilitas->id) : url('admin/fasilitas/') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if(isset($fasilitas))
            @method('patch')
            @endif
            <div class="mb-1">
              <label for="nama">Nama Fasilitas</label>
              <input type="text" class="form-control" name="nama" id="nama" value="{{ isset($fasilitas) ? $fasilitas->nama : old('nama') }}" required>
            </div>
            <div class="mb-1">
            <label for="gambar">Gambar</label>
              @if(isset($fasilitas))
                <br>
                <img src="{{ asset('storage/'.$fasilitas->gambar) }}" alt="" class="img-thumbnail" width="200px">
              @endif
              <input type="file" class="form-control" name="gambar" id="gambar" {{ isset($fasilitas) ? '' : 'required' }}>
            </div>
            <div class="mb-1">
              <label for="luas">Luas</label>
              <input type="text" class="form-control" name="luas" id="luas" value="{{ isset($fasilitas) ? $fasilitas->luas : old('luas') }}" required>
            </div>
            <div class="mb-1">
              <label for="kondisi">Kondisi</label>
              <select name="kondisi" id="kondisi" class="form-control" required>
                <option value="">-- Pilih Kondisi --</option>
                <option value="Layak Pakai" {{ isset($fasilitas) && $fasilitas->kondisi == 'Layak Pakai' ? 'selected' : '' }}>Layak Pakai</option>
                <option value="Tidak Layak Pakai" {{ isset($fasilitas) && $fasilitas->kondisi == 'Tidak Layak Pakai' ? 'selected' : '' }}>Tidak Layak Pakai</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
      </div>
    </div>
    <!-- /.col-->
</div>

@endsection
