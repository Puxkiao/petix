<?php
namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function regis(Request $req) {
        try {
            // Get the latest id_users value from the database
            $latestUser = Users::orderBy('id_users', 'desc')->first();
            $newId = 'U001'; // Default value if no users exist

            if ($latestUser) {
                // Extract the numeric part and increment it
                $latestIdNumber = (int) substr($latestUser->id_users, 1);
                $newId = 'U' . str_pad($latestIdNumber + 1, 3, '0', STR_PAD_LEFT);
            }
            $user = Users::create([
                'id_users' => $newId,
                'nama' => $req->nama,
                'username' => $req->userName,
                'password' => Hash::make($req->password),
            ]);
            // dd($user);
            if ($user) {
                return redirect('/login')->with('success', 'Registration successful. Please login.');
            } else {
                return redirect('/register')->with('error', 'Failed to register user. Please try again.');
            }
        } catch (\Exception $e) {
            // Log any exceptions for debugging
            dd($e->getMessage());
            \Log::error('Exception: ' . $e->getMessage());
            return redirect('/register')->with('error', 'An unexpected error occurred. Please try again.');
        }
    }
}