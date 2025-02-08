<?php

namespace App\Http\Controllers;
use App\Models\Studio;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudioController extends Controller
{
    public function index_studio(){
        $studio = Studio::all();
        return response()->json($studio);
    }
    
    public function store_studio(Request $request){
        $v_studio = Validator::make($request->all(), [
            'id_studio' => 'required',
            'nama_studio' => 'required',
            'kursi' => 'required',
            'lokasi' => 'required',
        ]);
        if ($v_studio->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $v_studio->errors()
            ], 400);
        }
        $studio = Studio::create([
            'id_studio' => $request->id_studio,
            'nama_studio' => $request->nama_studio,
            'kursi' => $request->kursi,
            'lokasi' => $request->lokasi,
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'studio berhasil ditambahkan'
        ], 201);
    }

    public function show_studio($id)
    {
        $studio = Studio::find($id);
        if (is_null($studio)) {
            return response()->json([
                "success" => false,
                "message" => "Data tidak ditemukan.",
            ]);
        }
        return response()->json([
            "success" => true,
            "message" => "studio berhasil ditemukan.",
            "data" => $studio
        ]);
    }
}
