<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;
use Illuminate\Contracts\View\View;

class MovieController extends Controller
{
    public function topRated(){
        $movies = Movie::orderBy('rating','desc')->limit(50)->get();
        return view('movies.top-rated',compact('movies'));
    }

    public function shawshank(){
        $result = Movie::where('name','=','The Shawshank Redemption')->limit(1)->get();
        return view('movies.detail',compact('result'));
    }

    public function search(){
        
        return view('movies.search');
        
    }
    public function searchResult(Request $request) {
        $searchTerm = $request->input('movie_name');
    
        if (!$searchTerm) {
            return redirect('/movies/search')->with('error', 'Please enter a search term.');
        }
    
        $movies = Movie::where('name', 'LIKE', '%' . $searchTerm . '%')
            ->orderBy('name', 'asc')
            ->get();
    
        return view('movies.searchResult', compact('movies', 'searchTerm'));
    }

    public function index(){
        $movies = Movie::orderby('name')
        ->where('votes_nr','>=',10000)
        ->limit(20)
        ->get();
        return view('movies.index', compact('movies'));
    }

    public function selectMovie() :View {
        return view('movies.selectMovie');
    }
    public function selectMovieResult(Request $request) :View {
        $movie_id = $request->input('movie_id');
        
        
        if(!$movie_id) {
            return redirect('movies/selectMovie')->with('error', 'Pleases enter a valid id');
        }
        $result = Movie::find($movie_id);
        
        return view('movies.selectMovieResult',compact('result'));
    }
}
