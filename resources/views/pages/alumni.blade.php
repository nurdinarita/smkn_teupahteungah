@extends('pages.layouts.main')

@section('container')
<div class="container-fluid">
<section>
    <div class="row">
        <div class="col-md-12 mt-4">
            <h4 class="bg-secondary text-center text-light p-2">Alumni SMKN 1 Teupah Tengah</h4>
            <div class="container">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th class="col-1">No</th>
                      <th>Tahun Lulus</th>
                      <th>Nama Alumni</th>
                      <th>Status Alumni</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($alumni as $alumni)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $alumni->tahun }}</td>
                      <td>{{ $alumni->nama }}</td>
                      <td>{{ $alumni->status }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Tahun Lulus</th>
                      <th>Nama Alumni</th>
                      <th>Status Alumni</th>
                    </tr>
                    </tfoot>
                  </table>
            </div> 
        </div>
    </div>
</section>
@endsection