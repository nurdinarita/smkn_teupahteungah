@extends('admin.layouts.main')

@section('container')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Galeri Sekolah</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <a href="{{ url('admin/galeri/create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Galeri</a>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th class="col-1">No</th>
          <th>Judul</th>
          <th>Deskripsi</th>
          <th>Gambar</th>
          <th class="col-2">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($galeri as $galeri)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $galeri->judul }}</td>
          <td>{{ $galeri->deskripsi }}</td>
          <td><img src="{{ asset('storage/'.$galeri->gambar) }}" width="200px"></td>
          <td class="text-center">
            {{-- <a href="{{ url('admin/galeri/'.$galeri->id) }}" class="btn btn-info">
                <i class="fas fa-eye"></i>
            </a> --}}
            <a href="{{ url('admin/galeri/'.$galeri->id.'/edit') }}" class="btn btn-warning">
                <i class="fas fa-edit"></i>
            </a>
            <button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-url={{ url('admin/galeri/'.$galeri->id) }}>
                <i class="fas fa-trash-alt"></i>
            </button>
          </td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Deskripsi</th>
          <th>Gambar</th>
          <th>Aksi</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Yakin ingin menghapus data ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <form method="post">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection


@section('script-hapus')
<script>
    $('#deleteModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var url = button.data('url') // Extract info from data-* attributes
       
        var modal = $(this)

        modal.find('.modal-footer form').attr("action", url)
    })
</script>
@endsection