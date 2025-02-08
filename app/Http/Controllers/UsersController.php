<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    public function index_users(){
        $users = Users::all();
        return response()->json($users);
    }
}