<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('index', compact('posts'));
    }

    public function create()
    {
        return view('posts_create');
    }

    public function show($id)
{
    $post = Post::findOrFail($id);
    return view('posts_show', compact('post'));
}

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Create a new post instance
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        // Redirect to the posts index page
        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }
}