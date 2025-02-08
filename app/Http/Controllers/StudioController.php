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
}
