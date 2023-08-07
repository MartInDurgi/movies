<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/movies', [MoviesController::class, 'index']);
Route::get('/movies/{id}', [MoviesController::class, 'show']);
Route::get('/addmovie', [MoviesController::class, 'addmovie']);
Route::post('/addmovie', [MoviesController::class, 'store']);
Route::post('/comment', [CommentsController::class, 'store']);
Route::get('/genres/{genre}', [GenresController::class, 'show']);
