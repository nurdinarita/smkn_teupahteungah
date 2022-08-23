@extends('pages.layouts.main')

@section('container')
<div class="container-fluid">
<section>
    <div class="row">
        <div class="col-md-12 mt-4">
            <h4 class="bg-secondary text-center text-light p-2">Dewan Guru</h4>
            <div class="container">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th class="col-1">No</th>
                      <th>NIP</th>
                      <th>Nama Guru</th>
                      <th>Mata Pelajaran</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($guru as $guru)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $guru->nip }}</td>
                      <td>{{ $guru->nama }}</td>
                      <td>{{ $guru->jabatan }}</td>
                      <td>{{ $guru->mata_pelajaran }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>No</th>
                      <th>NIP</th>
                      <th>Nama Guru</th>
                      <th>Mata Pelajaran</th>
                    </tr>
                    </tfoot>
                  </table>
            </div>
        </div>
    </div>
</section>
@endsection