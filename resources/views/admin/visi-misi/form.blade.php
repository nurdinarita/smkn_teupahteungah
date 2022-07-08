@extends('admin.layouts.main')

@section('container')
<div class="row">
    <div class="col-md-12">
      <div class="card card-outline card-info">
        <div class="card-header">
          <h3 class="card-title">
            Edit Visi Dan Misi Sekolah
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <form action="{{ url('admin/visi-misi/'.$visimisi->id) }}" method="post">
            @csrf
            @method('patch')
            <label for="summernotevisi">Visi Sekolah</label>
            <textarea id="summernotevisi" name="visi" required>
              {{ $visimisi->visi }}
            </textarea>

            <label for="summernotemisi">Misi Sekolah</label>
            <textarea id="summernotemisi" name="misi" required>
              {{ $visimisi->misi }}
            </textarea>
            <button type="submit" class="btn btn-primary">Update Profil</button>
        </form>
        </div>
      </div>
    </div>
    <!-- /.col-->
</div>
@endsection