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


Route::get('/', [MovieController::class, 'home']);
Route::get('movies', [MovieController::class, 'index']);
Route::get('addfilm', [MovieController::class, 'addfilm']);
Route::get('ticket/{id}', [MovieController::class, 'show']);
Route::post('buyticket', [MovieController::class, 'buyticket']);

Route::get('login', [LoginController::class, 'index']);
Route::get('logout', [LoginController::class, 'logout']);
Route::post('loginUser', [LoginController::class, 'loginUser']);

Route::get('register', [RegisterController::class, 'index']);
Route::post('registerUser', [RegisterController::class, 'regis']);


Route::get('/ticket', [TicketController::class, 'index']);
Route::get('/myticket', [TicketController::class, 'ticket']);
Route::get('/viewticket', [TicketController::class, 'viewticket']);


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

//UPDATE
Route::put('api/user/update/{id}', [UsersController::class, 'update_user']);
Route::put('api/film/update/{id}', [FilmsController::class, 'update_film']);
Route::put('api/studio/update/{id}', [StudioController::class, 'update_studio']);
Route::put('api/ticket/update/{id}', [TicketController::class, 'update_ticket']);
Route::put('api/payment/update/{id}', [PaymentController::class, 'update_payment']);

//DELETE
Route::delete('api/user/delete/{id}', [UsersController::class, 'destroy_user']);
Route::delete('api/film/delete/{id}', [FilmsController::class, 'destroy_film']);
Route::delete('api/studio/delete/{id}', [StudioController::class, 'destroy_studio']);
Route::delete('api/ticket/delete/{id}', [TicketController::class, 'destroy_ticket']);
Route::delete('api/payment/delete/{id}', [PaymentController::class, 'destroy_payment']);


