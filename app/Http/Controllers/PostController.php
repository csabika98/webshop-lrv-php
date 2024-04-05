<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $user = auth()->user();
        #echo "$user";
        return view('index', compact('posts', 'user'));
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
    public function destroy($id)
{
    $post = Post::findOrFail($id);
    $post->delete();

    return redirect()->route('posts_index')->with('success', 'Post deleted successfully.');
}

public function update(Request $request, $id)
{
    $post = Post::findOrFail($id);
    
    // Validate the incoming request data
    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
    ]);

    // Update the post with the new data
    $post->update([
        'title' => $request->title,
        'content' => $request->content,
    ]);

    // Redirect back to the index page with a success message
    return redirect()->route('posts_index')->with('success', 'Post updated successfully.');
}


public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('edit_posts', compact('post'));
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
        return redirect()->route('posts_index')->with('success', 'Post created successfully!');
    }
}