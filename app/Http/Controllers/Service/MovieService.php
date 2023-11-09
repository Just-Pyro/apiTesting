<?php

namespace App\Http\Controllers\Service;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MovieService extends Controller
{
    public static function getAllMovies(){
        return Movie::all();
    }

    public static function addMovie(Request $request){
        $movie = new Movie();
        $movie->movie_name = $request->mname;
        $movie->synopsis = $request->summary;
        $movie->save();
        return Movie::all();
    }

    public static function updateMovie(Request $request){
        $movie = Movie::find($request->id);
        $movie->movie_name = $request->mname;
        $movie->synopsis = $request->summary;
        $movie->save();
        return Movie::all();
    }

    public static function deleteMovie(Request $request){
        $movie = Movie::find($request->id);
        $movie->delete();

        return Movie::all();
    }
}
