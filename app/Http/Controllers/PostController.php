<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Posts::orderBy('created_at', 'desc')->paginate(20);

        return view('blog.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $post               = new Posts();
        $post->title        = $request->title;
        $post->excerpt      = $request->excerpt;
        $post->body         = $request->body;
        $post->image_path   = 'not find';
        $post->is_published = true;
        $post->min_to_read  = 2;

        $post->save();

        return redirect(route('blog.index'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Posts::findOrFail($id);

        return view('blog.show', [
            'post' => $post,
        ]);

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
