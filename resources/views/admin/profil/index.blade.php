@extends('admin.layouts.main')

@section('container')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Profil Sekolah</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th class="col-1">No</th>
          <th>Profil Sekolah</th>
          <th class="col-2">Aksi</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>1</td>
          <td>
            {!! $profil->profil !!}
          </td>
          <td class="text-center">
            <a href="{{ url('admin/profil/'.$profil->id.'/edit') }}" class="btn btn-warning">
                <i class="fas fa-edit"></i>
            </a>
            {{-- <a href="#" class="btn btn-danger">
                <i class="fas fa-trash-alt"></i>
            </a> --}}
          </td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
          <th>No</th>
          <th>Profil Sekolah</th>
          <th>Aksi</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection

{{-- @section('script-hapus')
<script>
    $('#deleteModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var url = button.data('url') // Extract info from data-* attributes
       
        var modal = $(this)

        modal.find('.modal-footer form').attr("action", url)
    })
</script>
@endsection --}}