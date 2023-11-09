<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Service\MovieService;

class MovieController extends Controller
{
    public function getMovies(){
        return MovieService::getAllMovies();
    }

    public function addMovie(Request $request){
        return MovieService::addMovie($request);
    }

    public function editMovie(Request $request){
        return MovieService::updateMovie($request);
    }

    public function deleteMovie(Request $request){
        return MovieService::deleteMovie($request);
    }
}
