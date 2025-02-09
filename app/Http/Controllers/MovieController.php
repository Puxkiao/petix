<?php

// app/Http/Controllers/MovieController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Films;

class MovieController extends Controller
{
    public function home(){
        $movies = Films::All();
        return view('home', compact('movies'));
    }
    public function show_movie($id){
        $movies = Films::All();
        return view('components.films', compact('movies'));
    }
    public function index()
    {
        
        // $movies = [
        //     [
        //         'id' => 1,
        //         'title' => 'Mufasa: The Lion King',
        //         'poster' => 'mufasa.jpg',
        //         'trailer_url' => 'https://www.youtube.com/embed/VIDEO_ID_1', // Replace with actual video ID
        //     ],
        //     [
        //         'id' => 2,
        //         'title' => 'Sonic 3',
        //         'genre' => 'Action, Adventure',
        //         'poster' => 'sonic3.jpg',
        //         'trailer_url' => 'https://www.youtube.com/embed/VIDEO_ID_2',
        //     ],
        //     // Add more movies as needed...
        // ];

        return view('ticket.index', compact('movies'));
    }

    public function show($id)
    {
        $data = Films::find($id);
        return view("getticket", compact('data'));
    }

    public function buyticket(Request $req){
        unset($req['_token']);
        dd($req);
        $films = Films::create($req->all());
        if ($films) {
            return redirect('home')->with('success', 'Ticket purchase successful.');
        } else {
            return redirect('home')->with('error', 'Ticket purchase failed.');
        }
    }
    
    public function addfilm(){
        return view('addfilm');
    }
}