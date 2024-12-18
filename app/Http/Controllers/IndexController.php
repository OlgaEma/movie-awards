<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){
        $movies = DB::select('SELECT * FROM `movies` ORDER BY `rating` DESC LIMIT 10');
        return view('index.index',compact('movies'));
    }
}
