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
}
