<?php

namespace App\Http\Controllers;
use App\Models\Films;

use Illuminate\Http\Request;

class FilmsController extends Controller
{
    public function index_films(){
        $films = Films::all();
        return response()->json($films);
    }
}
