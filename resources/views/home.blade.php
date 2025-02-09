{{-- {{dd($movies);}} --}}

<x-app-layout>
    {{session_start()}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <x-carousel/>
    <div class="container">
        <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            Lokasi Theater
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="#">CGV</a></li>
            <li><a class="dropdown-item" href="#">XXI</a></li>
            <li><a class="dropdown-item" href="#">Cinepolis</a></li>
        </ul>
        </div>
    </div>
<div class="container my-5">
        <div class="row g-4">
            <!-- Movie Card -->
            @foreach($movies as $movie)
                <div class="col-md-3">
                    <div class="movie-card position-relative overflow-hidden">
                        <img src="{{ asset('images/'.$movie->poster) }}" class="img-fluid rounded" alt="{{$movie->title}}">
                        <div class="overlay d-flex flex-column justify-content-center align-items-center">
                            <a href="{{$movie->film_url}}" target="_blank" class="btn btn-primary mb-2">Watch Trailer</a>
                            <a href="{{ url("ticket/$movie->id_films") }}"class="btn btn-warning">Get Ticket</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- Repeat for other movies -->
        </div>
    </div>

    {{-- <x-films/> --}}

</x-app-layout>