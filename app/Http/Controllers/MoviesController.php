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
        $comics = Movie::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $new_movie = new Movie();
        $new_movie->title = $data['title'];
        $new_movie->description = $data['description'];
        $new_movie->thumb = $data['thumb'];
        $new_movie->price = $data['price'];
        $new_movie->series = $data['series'];
        $new_movie->sale_date = $data['sale_date'];
        $new_movie->type = $data['type'];
        $new_movie->artists = $data['artists'];
        $new_movie->writers = $data['writers'];
        $new_movie->save();

        return to_route('comics.show', $new_movie->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comics = Movie::findOrFail($id);
        return view('comics.show', compact('comics'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
}
