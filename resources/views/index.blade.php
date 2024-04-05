@extends('layout')

@section('title', 'Marketplace')

@section('content')
<div class="container">
    <h1>Posts</h1>
    @auth
        @if(auth()->user()->name === 'admin')
            <p>Welcome, admin!</p>
            <a href="{{ route('posts_create') }}" class="btn btn-primary">Create New Post</a>
        @else
            <p>Welcome, {{ auth()->user()->name }}!</p>
        @endif
    @endauth
    @foreach ($posts as $post)
    <div class="card">
        <div class="card-content">
            <span class="card-title">{{ $post->title }}</span>
            <p class="card-description">{{ $post->content }}</p>
            <a href="{{ route('posts_show', $post->id) }}" class="btn btn-primary">Read More</a>
            @auth
                @if(auth()->user()->name === 'admin')
                    <a href="{{ route('edit_posts', $post->id) }}" class="btn btn-secondary">Edit</a>
                    <form action="{{ route('posts_destroy', $post->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                @endif
            @endauth
        </div>
    </div>
    @endforeach
</div>
@endsection



