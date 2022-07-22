@extends('pages.layouts.main')

@section('container')
<div class="container-fluid">
<section>
    <div class="row">
        <div class="col-md-12 mt-4">
            <h4 class="bg-secondary text-center text-light p-2">Pendaftaran SMKN 1 Teupah Tengah</h4>
            <div class="container">
                @if(isset($pendaftaran))
                <p>
                    {!! $pendaftaran->body !!}
                </p>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection