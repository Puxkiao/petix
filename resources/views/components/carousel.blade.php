<x-slot name="heading">Selamat Datang Di Petix</x-slot>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/popcorn.png') }}" class="d-block w-100" alt="Popcorn">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/nontonbareng.png') }}" class="d-block w-100" alt="Nonton Bareng">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/pesantiket.png') }}" class="d-block w-100" alt="Pesan Tiket">
        </div>
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

</div>