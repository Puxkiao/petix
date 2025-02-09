<x-app-layout title="login">
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
<x-slot name="heading">
        Login
    </x-slot>
    <div class="wrapper">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="">
        </div>
        <div class="text-center mt-4 name">
            PETIX
        </div>
        <form class="p-3 mt-3" method="POST" action="{{ url('loginUser') }}">
            @csrf
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="username" id="userName" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <button type="submit" class="btn mt-3">Login</button>
        </form>
        <div class="text-center fs-6">
            <a href="#">Forget password?</a> or <a href="{{ url('register') }}">Register</a>
        </div>
    </div>



</x-app-layout>