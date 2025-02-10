<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function loginUser(Request $req){
        // Validate the request data
        $req->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Attempt to find the user by username
        $user = Users::where('username', $req->username)->first();

        // Check if the user exists and the password is correct
        if ($user && Hash::check($req->password, $user->password)) {
            // Set session variable to indicate the user is logged in
            Session::put('user_id', $user->id);
            Session::put('username', $user->username);

            // Redirect to the intended page or home page
            return redirect()->intended('/')->with('success', "Login successful, Welcome $user->username!");
        } else {
            // Redirect back with an error message
            return redirect('/login')->with('error', 'Invalid username or password.');
        }
    }
    public function logout(){
        // Clear the session variable
        // Session::forget('user_id');
        Session::flush();

        // Redirect to the login page
        return redirect('/login')->with('success', 'You have been logged out.');
    }
}
