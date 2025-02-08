<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get( uri: '/', action: fn ()=> view(view:'home'));
Route::get( uri:'/login', action: fn ()=> view(view:'login'));
Route::get( uri: 'users', action: function (){

    $users = [
        ['id' =>1, 'name'=>'john doe','email'=>'john@lawliet.com'],
        ['id' =>1, 'name'=>'john doe','email'=>'john@lawliet.com'],
    ];

    return view (view: 'users.index', data: compact(var_name:'users'));
});


Route::get('/movies', [MovieController::class, 'index']);