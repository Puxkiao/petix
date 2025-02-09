<x-app-layout>
<div class="container my-4">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/myticket') }}">My Ticket</a></li>
            <li class="breadcrumb-item active" aria-current="page">movie</li>
        </ol>
    </nav>

    <!-- Ticket Details Card -->
    <div class="card shadow-sm">
        <div class="card-body">
            <!-- Print Ticket Section -->
            <div class="text-center mb-4">
            <div class="center-image">
    <img src="{{ asset('images/mufasa.jpg') }}" alt="Print Icon" class="mb-2">
</div>
                <h5 class="fw-bold">Print Ticket</h5>
                <p class="text-muted">
                    Enter your booking code at CGV Cinemas Self-Ticketing Machine to print your ticket.
                </p>
            </img>

            <!-- Movie Title -->
            <h3 class="text-center text-uppercase">movie</h3>
            <hr>

            <!-- Booking Code and Pass Key -->
            <div class="d-flex justify-content-between mb-4">
                <div>
                    <strong>Booking Code</strong>
                    <p class="fs-5 fw-bold"></p>
                </div>
                <div>
                    <strong>Pass Key</strong>
                    <p class="fs-5 fw-bold"></p>
                </div>
            </div>

            
            <!-- Payment Details Button -->
            <div class="text-center">
                <button class="btn btn-warning btn-lg px-4 py-2">Payment Details</button>
            </div>
        </div>
    </div>
</div>
</x-app-layout>