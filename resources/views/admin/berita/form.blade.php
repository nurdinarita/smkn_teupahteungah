@extends('admin.layouts.main')

@section('container')
<div class="row">
    <div class="col-md-12">
      <div class="card card-outline card-info">
        <div class="card-header">
          <h3 class="card-title">
            {{ !isset($berita) ? 'Tambah Berita Sekolah' : 'Edit Berita Sekolah' }}
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <form action="{{ isset($berita) ? url('admin/berita/'.$berita->id) : url('admin/berita/') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if(isset($berita))
            @method('patch')
            @endif
            <div class="mb-1">
              <label for="judul">Judul</label>
              <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul" value="{{ isset($berita) ? $berita->judul : old('judul') }}" required>
            </div>
            <div class="mb-1">
              <label for="slug">Slug</label>
              <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug" value="{{ isset($berita) ? $berita->slug : old('slug') }}" required>
            </div>
            <div class="mb-1">
              <label for="gambar">Gambar</label>
              @if(isset($berita))
                <br>
                <img src="{{ asset('storage/'.$berita->gambar) }}" alt="" class="img-thumbnail" width="200px">
              @endif
              <input type="file" class="form-control" name="gambar" id="gambar">
            </div>
            <div class="mb-1">
              <label for="summernote">Isi Berita</label>
              <textarea id="summernote" name="body" required>
                {!! isset($berita) ? $berita->body : old('body') !!}
              </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
      </div>
    </div>
    <!-- /.col-->
</div>

@endsection

@section('slug')
<script>
    $('#judul').change(function(e) {
       $.get('{{ url('checkSlug') }}', 
       { 'judul': $(this).val() }, 
       function( data ) {
           $('#slug').val(data.slug);
       }
       );
    });
</script>
@endsection