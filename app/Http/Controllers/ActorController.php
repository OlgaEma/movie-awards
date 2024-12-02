<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;

class ActorController extends Controller
{
    public function actorDetails() : View{
        $details = DB::table('movie_person')
                ->leftJoin('movies', 'movie_person.movie_id', '=', 'movies.id')
                ->leftJoin('people', 'movie_person.person_id', '=', 'people.id')
                ->where('movie_person.person_id', 209)
                ->select('movies.*', 'people.fullname')
                ->get();
        
        return view('actors.details',compact('details'));
    }
}
