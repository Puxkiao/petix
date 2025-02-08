<x-app-layout>
<div class="container my-5">
    <div class="row">
        <!-- Left Section: Order Summary -->
        <div class="col-md-6">
            <h4 class="fw-bold mb-4"><i class="bi bi-arrow-left me-2"></i> Order Summary</h4>
            <div class="alert alert-warning d-flex align-items-center">
                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                <div>
                    Please complete your payment now, otherwise your ticket will be released.
                </div>
                <span class="ms-auto text-danger fw-bold">06:35</span>
            </div>

            <!-- Payment Methods -->
            <h5 class="fw-bold mb-3"><i class="bi bi-wallet2 me-2"></i> Choose Payment Method</h5>
            <form action="{{ route('payment.process') }}" method="POST">
                @csrf
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="payment_method" id="creditCard" value="credit_card" required>
                    <label class="form-check-label d-flex align-items-center" for="creditCard">
                        Credit Card / Debit Card
                        <img src="{{ asset('images/visa-mastercard.png') }}" alt="Visa/Mastercard" class="ms-auto" style="width: 50px;">
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="payment_method" id="gopay" value="gopay">
                    <label class="form-check-label d-flex align-items-center" for="gopay">
                        GoPay
                        <img src="{{ asset('images/gopay.png') }}" alt="GoPay" class="ms-auto" style="width: 50px;">
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="payment_method" id="bca" value="bca">
                    <label class="form-check-label d-flex align-items-center" for="bca">
                        BCA Virtual Account
                        <img src="{{ asset('images/bca.png') }}" alt="BCA" class="ms-auto" style="width: 50px;">
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="payment_method" id="permata" value="permata">
                    <label class="form-check-label d-flex align-items-center" for="permata">
                        Permata Virtual Account
                        <img src="{{ asset('images/permata.png') }}" alt="Permata" class="ms-auto" style="width: 50px;">
                    </label>
                </div>

                <button type="submit" class="btn btn-primary btn-lg w-100 mt-4">Pay Now</button>
            </form>
        </div>

        <!-- Right Section: Movie Details -->
        <div class="col-md-6">
            <h5 class="fw-bold mb-4">Movie Detail</h5>
            <div class="d-flex mb-4">
                <img src="{{ asset('images/mufasa.jpg') }}" alt="Movie Poster" class="rounded" style="width: 100px; height: 150px; object-fit: cover;">
                <div class="ms-3">
                    <h6 class="fw-bold">MUFASA</h6>
                    <!-- <p class="mb-1"><strong>Cinema:</strong> CGV - Metro Indah Mall</p>
                    <p class="mb-1"><strong>Date & Time:</strong> Saturday, 8 Feb 2025 - 20:00</p>
                    <p class="mb-1"><strong>Studio:</strong> REGULAR</p>
                    <p><strong>Seats:</strong> L11, L10, L1</p> -->
                </div>
            </div>

            <h5 class="fw-bold mb-3">Payment Detail</h5>
            <div class="d-flex justify-content-between mb-2">
                <span>Ticket Price</span>
                <span>Rp74.000</span>
            </div>
            <div class="d-flex justify-content-between mb-2">
                <span>Convenience Fee</span>
                <span>Rp6.000</span>
            </div>
            <div class="d-flex justify-content-between mb-2">
                <span>Admin Fee</span>
                <span class="text-success">Free</span>
            </div>
            <hr>
            <div class="d-flex justify-content-between fw-bold">
                <span>Total</span>
                <span>Rp80.000</span>
            </div>
        </div>
    </div>
</div>
</x-app-layout>