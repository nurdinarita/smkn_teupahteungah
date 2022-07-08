@extends('pages.layouts.main')

@section('container')
<div class="container-fluid">
<section>
    <div class="row">
        <div class="col-md-12 mt-4">
            <h4 class="bg-secondary text-center text-light p-2">Profil Sekolah</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p>
                {!! $profil->profil !!}
            </p>
        </div>
    </div>
</section>

<section>
    <div class="row">
        <div class="col-md-12 mt-4">
            <h4 class="bg-secondary text-center text-light p-2">Visi Dan Misi</h4>
        </div>
    </div>
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
</section>
@endsection