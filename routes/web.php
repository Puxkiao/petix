<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegisterController;

Route::get( uri: '/', action: fn ()=> view(view:'home'));
Route::get( uri: 'users', action: function (){

    $users = [
        ['id' =>1, 'name'=>'john doe','email'=>'john@lawliet.com'],
        ['id' =>1, 'name'=>'john doe','email'=>'john@lawliet.com'],
    ];

    return view (view: 'users.index', data: compact(var_name:'users'));
});


Route::get('/movies', [MovieController::class, 'index']);


Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);


Route::get('/ticket', [TicketController::class, 'index']);
Route::get('/myticket', [TicketController::class, 'ticket']);


Route::get('/payment', [PaymentController::class, 'index']);