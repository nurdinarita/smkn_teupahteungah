{{-- Carousel --}}
@if(isset($slider))
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach($slider as $slider)
        <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }}">
        <img src="{{ asset('storage/'.$slider->gambar) }}" class="d-block w-100" height="453px" alt="...">
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
@endif
{{-- End Caurosel --}}