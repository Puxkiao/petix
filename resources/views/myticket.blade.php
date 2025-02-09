<x-app-layout>
<div class="container my-5">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">My Tickets</li>
        </ol>
    </nav>

    <!-- Page Title -->
    <h1 class="fw-bold">MY TICKETS</h1>
    <p class="text-muted">BOOKING HISTORY</p>

    <!-- Sort and Search -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <label for="sort" class="me-2">Sort By:</label>
            <select id="sort" class="form-select d-inline-block w-auto">
                <option value="latest" selected>Latest</option>
                <option value="oldest">Oldest</option>
            </select>
        </div>
        <div>
            <input type="text" class="form-control" placeholder="Search tickets..." style="width: 300px;">
        </div>
    </div>

    <!-- Ticket List -->
    <div class="ticket-list">
        <!-- Ticket Item -->
        <div class="d-flex align-items-center mb-4 p-3 border rounded shadow-sm">
            <div class="ticket-badge bg-warning text-white text-center p-2 me-3" style="width: 80px; border-radius: 10px;">
                <span class="fw-bold">MOVIE</span>
            </div>
            <div class="d-flex align-items-center flex-grow-1">
                <img src="{{ asset('images/mufasa.jpg') }}" alt="Doctor Strange" class="rounded" style="width: 80px; height: 100px; object-fit: cover;">
                <div class="ms-3">
                    <h6 class="fw-bold mb-1">MUFASA</h6>
                    <p class="mb-0 text-muted">REGULAR 2D</p>
                </div>
            </div>
            <div class="text-end me-3">
                <p class="mb-0 fw-bold">CGV</p>
                <p class="mb-0 text-muted">Paris Van Java, Bandung</p>
            </div>
            <div class="text-end me-3">
                <p class="mb-0 fw-bold">Tue, 8 Feb 2025</p>
                <p class="mb-0 text-muted">18:00</p>
            </div>
            <div>
                <a href="{{url('/viewticket')}}" class="text-primary fw-bold">View Ticket →</a>
            </div>
        </div>

        <!-- Repeat Ticket Item -->
        <div class="d-flex align-items-center mb-4 p-3 border rounded shadow-sm">
            <div class="ticket-badge bg-warning text-white text-center p-2 me-3" style="width: 80px; border-radius: 10px;">
                <span class="fw-bold">MOVIE</span>
            </div>
            <div class="d-flex align-items-center flex-grow-1">
                <img src="{{ asset('images/matirasa.jpg') }}" alt="Spider-Man" class="rounded" style="width: 80px; height: 100px; object-fit: cover;">
                <div class="ms-3">
                    <h6 class="fw-bold mb-1">MATI RASA</h6>
                    <p class="mb-0 text-muted">REGULAR 2D</p>
                </div>
            </div>
            <div class="text-end me-3">
                <p class="mb-0 fw-bold">CGV</p>
                <p class="mb-0 text-muted">BEC Mall, Bandung</p>
            </div>
            <div class="text-end me-3">
                <p class="mb-0 fw-bold">Mon, 10 Feb 2025</p>
                <p class="mb-0 text-muted">17:00</p>
            </div>
            <div>
                <a href="#" class="text-primary fw-bold">View Ticket →</a>
            </div>
        </div>
    </div>
</div>
</x-app-layout>