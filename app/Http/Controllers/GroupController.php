<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Group;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Group::orderBy('name')->get();
        return view('groups.groups-index', [
            'groups' => $groups
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // get artists
        $artists = Artist::orderBy('name')->get();
        return view('groups.groups-create', [
            'artists' => $artists,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // create a new album from the request
        $group = Group::create([
            'name' => $request->name,
            'biography' => $request->biography,
            'image' => $request->image,
        ]);

        // Save image to storage and add to db
        if (request()->has('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
            $group->image = $imagePath;
            $group->save();
        }

        // add artists
        if (request()->has('artists')) {
            $group->artists()->attach(request('artists'));
        }
        // add Album Added flash message
        session()->flash('message', 'Group Added');

        return redirect()->route('groups.index');
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
