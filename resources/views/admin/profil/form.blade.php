@extends('admin.layouts.main')

@section('container')
<div class="row">
    <div class="col-md-12">
      <div class="card card-outline card-info">
        <div class="card-header">
          <h3 class="card-title">
            Edit Profil Sekolah
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <form action="{{ url('admin/profil/'.$profil->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <textarea id="summernote" name="profil" required>
              {!! $profil->profil !!}
            </textarea>
            <button type="submit" class="btn btn-primary">Update Profil</button>
        </form>
        </div>
      </div>
    </div>
    <!-- /.col-->
</div>
@endsection