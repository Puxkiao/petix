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
                <img src="{{ asset('images/mufasa.jpg') }}" class="card-img-top rounded" alt="Mufasa">
            </div>
            <a href="https://youtu.be/o17MF9vnabg?si=Jitajmq1eXvfL1xS" target="_blank" class="btn btn-primary mb-2">Watch Trailer</a>
        </div>

        <!-- Booking Form -->
        <div class="col-md-8">
            <h1 class="fw-bold">Pesan Tiket Anda</h1>
            <p class="text-muted">Pilih tangal, waktu dan tempat duduk anda.</p>

            <form  method="POST">
                @csrf
                <!-- Movie Title -->
                <div class="mb-3">
                    <label for="movieTitle" class="form-label">Movie</label>
                    <input type="text" class="form-control" id="movieTitle" name="movieTitle" value="Mufasa" readonly>
                </div>

                <!-- Date Selection -->
                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>

                <!-- Time Selection -->
                <div class="mb-3">
                    <label for="time" class="form-label">Waktu</label>
                    <select class="form-select" id="time" name="time" required>
                        <option value="10:00">10:00</option>
                        <option value="12:00">12:00</option>
                        <option value="14:00">14:00</option>
                        <option value="16:00">16:00</option>
                        <option value="18:00">18:00</option>
                        <option value="20:00">20:00</option>
                        <option value="22:00">22:00</option>
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