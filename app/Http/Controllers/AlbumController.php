<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Album::orderBy('title')->get();
        return view('albums.albums-index', [
            'albums' => $albums
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artists = Artist::select('id', 'name')->orderBy('name')->get();
        return view('albums.albums-create', [
            'artists' => $artists
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // create a new album from the request
        $album = Album::create([
            'title' => $request->title,
            'release_date' => $request->release_date,
            'description' => $request->description,
        ]);
        // Save image to storage and add to db
        if (request()->has('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
            $album->image = $imagePath;
            $album->save();
        }
        // attach artist many to many relationship
        $album->artists()->attach($request->artists);
        // add Album Added flash message
        session()->flash('message', 'Album Added');

        return redirect()->route('albums.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
