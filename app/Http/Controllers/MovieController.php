<?php

namespace App\Http\Controllers;

use App\Episode;
use App\Genre;

class MovieController extends Controller
{
    public function showAllGenre()
    {
        $genres = Genre::all();
        return view('home', ['genres' => $genres]);
    }

    public function showMovieDetail($id)
    {
        $movie = Episode::where('movie_id', '=', $id)->paginate(3);
        return view('detail', ['episodes' => $movie]);
    }

    public function showMovieByGenre($id)
    {
        $genres = Genre::where('id', $id)->first();
        return view('genre', ['genres' => $genres]);
    }
}
