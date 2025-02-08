<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index_users(){
        $users = Users::all();
        return response()->json($users);
    }

    public function store_users(Request $request){
        $v_users = Validator::make($request->all(), [
            'id_users' => 'required',
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);
        if ($v_users->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $v_users->errors()
            ], 400);
        }
        $users = Users::create([
            'id_users' => $request->id_users,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'users berhasil ditambahkan'
        ], 201);
    }
}