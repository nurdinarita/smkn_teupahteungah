@extends('admin.layouts.main')

@section('container')
<div class="row">
    <div class="col-md-12">
      <div class="card card-outline card-info">
        <div class="card-header">
          <h3 class="card-title">
            {{ !isset($struktur) ? 'Tambah Struktur Organisasi' : 'Edit Struktur Organisasi' }}
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <form action="{{ isset($struktur) ? url('admin/struktur-organisasi/'.$struktur->id) : url('admin/struktur-organisasi/') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if(isset($struktur))
            @method('patch')
            @endif
            <div class="mb-1">
              <label for="judul">Tahun</label>
              <input type="text" name="tahun" class="form-control" id="tahun" placeholder="Tahun" value="{{ isset($struktur) ? $struktur->tahun : old('tahun') }}" required>
            </div>
            <div class="mb-1">
              <label for="gambar">Gambar</label>
              @if(isset($struktur))
                <br>
                <img src="{{ asset('storage/'.$struktur->gambar) }}" alt="" class="img-thumbnail" width="200px">
              @endif
              <input type="file" class="form-control" name="gambar" id="gambar" {{ !isset($struktur) ? 'required' : '' }}>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
      </div>
    </div>
    <!-- /.col-->
</div>

@endsection