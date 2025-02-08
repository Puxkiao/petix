<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\UserResource;

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

    public function show_user($id)
    {
        $user = Users::find($id);
        if (is_null($user)) {
            return response()->json([
                "success" => false,
                "message" => "Data tidak ditemukan.",
            ]);
        }
        return response()->json([
            "success" => true,
            "message" => "User berhasil ditemukan.",
            "data" => $user
        ]);
    }
    
    public function update_user(Request $request, Users $id)
    {
        // Get the current data of the user
        $currentData = $id->getAttributes();  // Get current user attributes
    
        // Prepare the data for update
        $updatedData = [
            'nama'     => $request->filled('nama') ? $request->nama : $currentData['nama'],
            'username' => $request->filled('username') ? $request->username : $currentData['username'],
            'password' => $request->filled('password') ? Hash::make($request->password) : $currentData['password'],
        ];
    
        // Perform the update
        $id->update($updatedData);
    
        // Return success response
        return new UserResource(true, 'User Berhasil Diubah!', $id);
    }
    
}