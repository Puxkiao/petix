<?php

namespace App\Http\Controllers;
use App\Models\Studio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\UserResource;

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

    public function update_studio(Request $request, Studio $id)
    {
        // Get the current data of the studio
        $currentData = $id->getAttributes();  // Get current studio attributes
    
        // Prepare the data for update
        $updatedData = [
            'nama_studio'     => $request->filled('nama_studio') ? $request->nama_studio : $currentData['nama_studio'],
            'kursi' => $request->filled('kursi') ? $request->kursi : $currentData['kursi'],
            'lokasi' => $request->filled('lokasi') ? $request->lokasi : $currentData['lokasi']
            
        ];
    
        // Perform the update
        $id->update($updatedData);
    
        // Return success response
        return new UserResource(true, 'studio Berhasil Diubah!', $id);
    }

    public function destroy_studio(Studio $id)
    {
        // destroy controller laravel
        $id->delete();
        return new UserResource(true, 'Data Studio Berhasil Dihapus!', $id);
    }
}
