<?php

namespace App\Http\Controllers;
use App\Models\Films;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FilmsController extends Controller
{
    public function index_films(){
        $films = Films::all();
        return response()->json($films);
    }

    public function store_films(Request $request){
        $v_films = Validator::make($request->all(), [
            'id_films' => 'required',
            'judul_films' => 'required',
            'tanggal' => 'required',
            'durasi' => 'required',
            'jam_tayang' => 'required',
        ]);
        if ($v_films->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $v_films->errors()
            ], 400);
        }
        $films = Films::create([
            'id_films' => $request->id_films,
            'judul_films' => $request->judul_films,
            'tanggal' => $request->tanggal,
            'durasi' => $request->durasi,
            'jam_tayang' => $request->jam_tayang,
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'films berhasil ditambahkan'
        ], 201);
    }

    public function show_film($id)
    {
        $film = Films::find($id);
        if (is_null($film)) {
            return response()->json([
                "success" => false,
                "message" => "Data tidak ditemukan.",
            ]);
        }
        return response()->json([
            "success" => true,
            "message" => "film berhasil ditemukan.",
            "data" => $film
        ]);
    }
}
