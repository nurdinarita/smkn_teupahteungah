@extends('admin.layouts.main')

@section('container')
<div class="row">
    <div class="col-md-12">
      <div class="card card-outline card-info">
        <div class="card-header">
          <h3 class="card-title">
            {{ isset($guru) ? 'Edit Data Guru' : 'Tambah Data Guru' }}
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <form action="{{ isset($guru) ? url('admin/guru/'.$guru->id) : url('admin/guru/') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if(isset($guru))
            @method('patch')
            @endif
            <div class="mb-1">
              <label for="nip">NIP</label>
              <input type="text" class="form-control" name="nip" id="nip" value="{{ isset($guru) ? $guru->nip : old('nip') }}" required>
            </div>
            <div class="mb-1">
              <label for="nama">Nama Guru</label>
              <input type="text" class="form-control" name="nama" id="nama" value="{{ isset($guru) ? $guru->nama : old('nama') }}" required>
            </div>
            <div class="mb-1">
              <label for="nama">Jabatan Guru</label>
              <input type="text" class="form-control" name="jabatan" id="jabatan" value="{{ isset($guru) ? $guru->jabatan : old('jabatan') }}" required>
            </div>
            <div class="mb-1">
              <label for="mata_pelajaran">Mata Pelajaran</label>
              <input type="text" class="form-control" name="mata_pelajaran" id="mata_pelajaran" value="{{ isset($guru) ? $guru->mata_pelajaran : old('mata_pelajaran') }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
      </div>
    </div>
    <!-- /.col-->
</div>

@endsection
