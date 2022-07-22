@extends('admin.layouts.main')

@section('container')
<div class="row">
    <div class="col-md-12">
      <div class="card card-outline card-info">
        <div class="card-header">
          <h3 class="card-title">
            Edit Pendaftaran Sekolah
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <form action="{{ url('admin/pendaftaran/'.$pendaftaran->id) }}" method="post">
            @csrf
            @method('patch')
            <textarea id="summernote" name="body" required>
              {!! $pendaftaran->body !!}
            </textarea>
            <button type="submit" class="btn btn-primary">Update Data</button>
        </form>
        </div>
      </div>
    </div>
    <!-- /.col-->
</div>
@endsection