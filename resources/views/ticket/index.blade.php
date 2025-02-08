<div class="container my-5">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Book Ticket</li>
        </ol>
    </nav>

    <div class="row">
        <!-- Movie Poster -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <img src="{{ asset('images/matirasa.jpg') }}" class="card-img-top rounded" alt="Perayaan Mati Rasa">
            </div>
            <button class="btn btn-outline-primary btn-block mt-3">Watch Trailer</button>
        </div>

        <!-- Booking Form -->
        <div class="col-md-8">
            <h1 class="fw-bold">Book Your Ticket</h1>
            <p class="text-muted">Select your preferred date, time, and seat for the movie.</p>

            <form action="{{ route('tiket.store') }}" method="POST">
                @csrf
                <!-- Movie Title -->
                <div class="mb-3">
                    <label for="movieTitle" class="form-label">Movie</label>
                    <input type="text" class="form-control" id="movieTitle" name="movieTitle" value="Perayaan Mati Rasa" readonly>
                </div>

                <!-- Date Selection -->
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>

                <!-- Time Selection -->
                <div class="mb-3">
                    <label for="time" class="form-label">Time</label>
                    <select class="form-select" id="time" name="time" required>
                        <option value="14:00">14:00</option>
                        <option value="17:00">17:00</option>
                        <option value="20:00">20:00</option>
                    </select>
                </div>

                <!-- Seat Selection -->
                <div class="mb-3">
                    <label for="seat" class="form-label">Seat</label>
                    <input type="text" class="form-control" id="seat" name="seat" placeholder="Enter seat number (e.g., A1, B2)" required>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary btn-lg">Confirm Booking</button>
            </form>
        </div>
    </div>
</div>