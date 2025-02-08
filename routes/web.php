<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\StudioController;


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

// API
Route::get('api/users', [UsersController::class, 'index_users']);
Route::get('api/ticket', [TicketController::class, 'index_ticket']);
Route::get('api/films', [FilmsController::class, 'index_films']);
Route::get('api/studio', [StudioController::class, 'index_studio']);
Route::get('api/payment', [PaymentController::class, 'index_payment']);

Route::post('api/add/users', [UsersController::class, 'store_users']);
Route::post('api/add/films', [FilmsController::class, 'store_films']);
Route::post('api/add/studio', [StudioController::class, 'store_studio']);
Route::post('api/add/ticket', [TicketController::class, 'store_ticket']);
Route::post('api/add/payment', [PaymentController::class, 'store_payment']);

Route::get('api/user/{id}', [UsersController::class, 'show_user']);
Route::get('api/ticket/{id}', [TicketController::class, 'show_ticket']);
Route::get('api/film/{id}', [FilmsController::class, 'show_film']);
Route::get('api/payment/{id}', [PaymentController::class, 'show_payment']);

Route::put('api/user/update/{id}', [UsersController::class, 'update_user']);
Route::put('api/ticket/update/{id}', [TicketController::class, 'update_ticket']);