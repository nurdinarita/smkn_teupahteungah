@extends('admin.layouts.main')

@section('container')
<div class="row">
    <div class="col-md-12">
      <div class="card card-outline card-info">
        <div class="card-header">
          <h3 class="card-title">
            {{ isset($alumni) ? 'Edit Data Alumni' : 'Tambah Data Alumni' }}
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <form action="{{ isset($alumni) ? url('admin/alumni/'.$alumni->id) : url('admin/alumni/') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if(isset($alumni))
            @method('patch')
            @endif
            <div class="mb-1">
              <label for="nip">Tahun Lulus</label>
              <input type="text" class="form-control" name="tahun" id="nip" value="{{ isset($alumni) ? $alumni->tahun : old('tahun') }}" required>
            </div>
            <div class="mb-1">
              <label for="nama">Nama Alumni</label>
              <input type="text" class="form-control" name="nama" id="nama" value="{{ isset($alumni) ? $alumni->nama : old('nama') }}" required>
            </div>
            <div class="mb-1">
              <label for="mata_pelajaran">Status Alumni</label>
              <input type="text" class="form-control" name="status" id="mata_pelajaran" value="{{ isset($alumni) ? $alumni->status : old('status') }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
      </div>
    </div>
    <!-- /.col-->
</div>

@endsection
