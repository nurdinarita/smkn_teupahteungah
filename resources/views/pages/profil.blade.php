@extends('pages.layouts.main')

@section('container')
<div class="container-fluid">
<section>
    <div class="row">
        <div class="col-md-12 mt-4">
            <h4 class="bg-secondary text-center text-light p-2">Profil Sekolah</h4>
            @if(isset($profil))
            <p>
                {!! $profil->profil !!}
            </p>
            @endif
        </div>
    </div>
</section>

<section>
    <div class="row">
        <div class="col-md-12 mt-4">
            <h4 class="bg-secondary text-center text-light p-2">Visi Dan Misi</h4>
            @if(isset($visimisi))
            <div class="row">
                <div class="col-md-12">
                    <h3>Visi</h3>
                    {!! $visimisi->visi !!}
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3>Misi</h3>
                    {!! $visimisi->misi !!}
                </div>
            </div>
            @endif
        </div>
    </div>
</section>

<section>
    <div class="row">
        <div class="col-md-12 mt-4">
            <h4 class="bg-secondary text-center text-light p-2">Struktur Organisasi</h4>

            @if(isset($struktur))
            <div class="text-center">
                <h5>Tahun : {{ $struktur->tahun }}</h5>
                <img src="{{ asset('storage/'.$struktur->gambar) }}" class="img-thumbnail" width="70%">
            </div>
            @endif
        </div>
    </div>
</section>
@endsection