<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        $latestmovies = Movie::latest()
            ->take(5)
            ->get();
        return view('pages.movies', compact('movies', 'latestmovies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:5|max:255',
            'storyline' => 'required|string|min:10|max:5000',
            'director' => 'required|string',
            'genre' => 'required|string',
            'created' => 'required|integer',
        ]);

        Movie::create($request->all());

        return redirect('addmovie')->with('status', 'movie successfully created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie = Movie::findorfail($id);

        return view('pages.movie', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function addmovie()
    {
        return view('pages.addmovie');
    }
}
