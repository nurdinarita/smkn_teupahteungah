@extends('admin.layouts.main')

@section('container')
<div class="row">
    <div class="col-md-12">
      <div class="card card-outline card-info">
        <div class="card-header">
          <h3 class="card-title">
            {{ isset($slider) ? 'Edit Gambar Slider' : 'Tambah Gambar Slider' }}
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <form action="{{ isset($slider) ? url('admin/slider/'.$slider->id) : url('admin/slider/') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if(isset($slider))
            @method('patch')
            @endif
            <div class="mb-1">
              <label for="gambar">Gambar Slider</label>
              @if(isset($slider))
                <br>
                <img src="{{ asset('storage/'.$slider->gambar) }}" alt="" class="img-thumbnail" width="200px">
              @endif
              <input type="file" class="form-control" name="gambar" id="gambar" {{ isset($slider) ? '' : 'required' }}>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
      </div>
    </div>
    <!-- /.col-->
</div>

@endsection
