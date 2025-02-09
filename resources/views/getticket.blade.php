{{-- {{dd($data)}}   --}}

<x-app-layout>
<div class="container my-5">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pesan Tiket</li>
        </ol>
    </nav>

    <div class="row">
        <!-- Movie Poster -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <img src="{{ asset("images/$data->poster") }}" class="card-img-top rounded" alt="${{$data->judul_films}}">
            </div>
        </div>

        <!-- Booking Form -->
        <div class="col-md-8">
            <h1 class="fw-bold">Pesan Tiket Anda</h1>
            <p class="text-muted">Pilih tangal, waktu dan tempat duduk anda.</p>

            <form action="{{url("buyticket")}}" method="POST">
                @csrf
                <input type="hidden" name="id_film" value="{{$data->id_films}}">
                <input type="hidden" name="id_film" value="{{$data->id_films}}">
                <!-- Movie Title -->
                <div class="mb-3">
                    <label for="movieTitle" class="form-label">Movie</label>
                    <input type="text" class="form-control" id="movieTitle" name="movieTitle" value="{{$data->judul_films}}" readonly>
                </div>

                <!-- Date Selection -->
                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{$data->tanggal}}" readonly>
                </div>
{{-- 
                <!-- Price Selection -->
                <div class="mb-3">
                    <label for="price" class="form-label">Harga</label>
                    <input type="price" class="form-control" id="price" name="price" value="{{$data->price}}" readonly>
                </div> --}}

                <!-- Duration Selection -->
                <div class="mb-3">
                    <label for="duration" class="form-label">Durasi</label>
                    <input type="duration" class="form-control" id="duration" name="duration" value="{{$data->durasi}}" readonly>
                </div>

                <!-- Time Selection -->
                <div class="mb-3">
                    <label for="time" class="form-label">Waktu</label>
                    <select class="form-select" id="time" name="time" required>
                        @foreach(explode(',', $data->jam_tayang) as $time)
                            <option value="{{ $time }}">{{ $time }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Seat Selection -->
                <div class="mb-3">
                    <label for="seat" class="form-label">Kursi</label>
                    <input type="text" class="form-control" id="seat" name="seat" placeholder="pilih nomor kursi (e.g., A1, B2)" required>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary btn-lg">Konfirmasi Pemesanan</button>
            </form>
        </div>
    </div>
</div>
</x-app-layout>