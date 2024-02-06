<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get user posts
        $userPosts = Post::with('album:id,title')->where('user_id', auth()->id())->get();
        return view('posts.posts-index', [
            'user' => auth()->user(),
            'posts' => $userPosts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $albums = Album::with([])->select('id', 'title')->get();
    
        return view('posts.posts-create', [
            'user' => auth()->user(),
            'albums' => $albums
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userId = auth()->id();
        Post::create([
            'user_id' => $userId,
            'album_id' => $request->album_id,
            'content' => $request->content,
        ]);
        // add Post Added flash message
        session()->flash('message', 'Post Saved');

        return redirect()->route('posts.index');
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
