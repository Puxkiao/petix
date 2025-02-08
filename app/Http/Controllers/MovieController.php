<?php

// app/Http/Controllers/MovieController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = [
            [
                'id' => 1,
                'title' => 'Mufasa: The Lion King',
                'genre' => 'Adventure, Animation',
                'poster' => 'mufasa.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/VIDEO_ID_1', // Replace with actual video ID
            ],
            [
                'id' => 2,
                'title' => 'Sonic 3',
                'genre' => 'Action, Adventure',
                'poster' => 'sonic3.jpg',
                'trailer_url' => 'https://www.youtube.com/embed/VIDEO_ID_2',
            ],
            // Add more movies as needed...
        ];

        return view('movies.index', compact('movies'));
    }
}