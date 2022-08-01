@extends('pages.layouts.main')

@section('container')
<div class="container-fluid">
<section>
    <div class="row">
        <div class="col-md-12 mt-4">
            <h4 class="bg-secondary text-center text-light p-2">Fasilitas Sekolah</h4>
                <div class="container">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                        <th class="col-1">No</th>
                        <th>Nama Fasilitas</th>
                        <th>Gambar</th>
                        <th>Luas</th>
                        <th>Kondisi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($fasilitas as $fasilitas)
                        <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $fasilitas->nama }}</td>
                        <td><img src="{{ asset('storage/'.$fasilitas->gambar) }}" width="400px" height="400px"></td>
                        <td>{{ $fasilitas->luas }} m<sup>2<sup></td>
                        <td>{{ $fasilitas->kondisi }}</td>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                        <th>No</th>
                        <th>Nama Fasilitas</th>
                        <th>Gambar</th>
                        <th>Luas</th>
                        <th>Kondisi</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
    </div>
</section>
@endsection