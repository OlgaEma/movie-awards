<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ActorController;


Route::get('awards/index',[AwardController::class , 'index']);
Route::get('/',[IndexController::class,'index']);
Route::get('movies/top-rated',[MovieController::class,'topRated']);
Route::get('movies/detail',[MovieController::class,'shawshank']);
Route::get('movies/search',[MovieController::class,'search']);
Route::get('movies/index',[MovieController::class, 'index']);
Route::get('movies/searchResult', [MovieController::class, 'searchResult']);
Route::get('actors/details', [ActorController::class, 'actorDetails']);
Route::get('movies/selectMovie', [MovieController::class, 'selectMovie']);
Route::get('movies/selectMovieResult', [MovieController::class, 'selectMovieResult']);
