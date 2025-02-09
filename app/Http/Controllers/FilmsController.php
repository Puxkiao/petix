<?php

namespace App\Http\Controllers;
use App\Models\Films;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\UserResource;

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
            'poster' => 'required',
            'durasi' => 'required',
            'jam_tayang' => 'required',
            'film_url' => 'required',
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
            'poster' => $request->poster,
            'durasi' => $request->durasi,
            'jam_tayang' => $request->jam_tayang,
            'film_url' => $request->film_url,
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

    public function update_film(Request $request, Films $id)
    {
        // Get the current data of the films
        $currentData = $id->getAttributes();  // Get current films attributes
    
        // Prepare the data for update
        $updatedData = [
            'judul_films'     => $request->filled('judul_films') ? $request->judul_films : $currentData['judul_films'],
            'tanggal'         => $request->filled('tanggal') ? $request->tanggal : $currentData['tanggal'],
            'poster'         => $request->filled('poster') ? $request->poster : $currentData['poster'],
            'durasi'          => $request->filled('durasi') ? $request->durasi : $currentData['durasi'],
            'jam_tayang'      => $request->filled('jam_tayang') ? $request->jam_tayang : $currentData['jam_tayang'],
            'film_url'      => $request->filled('film_url') ? $request->film_url : $currentData['film_url'],
            
        ];
    
        // Perform the update
        $id->update($updatedData);
    
        // Return success response
        return new UserResource(true, 'film Berhasil Diubah!', $id);
    }

    public function destroy_class(Films $id)
    {
        // destroy controller laravel
        $id->delete();
        return new UsersResource(true, 'Data Film Berhasil Dihapus!', $id);
    }
}
