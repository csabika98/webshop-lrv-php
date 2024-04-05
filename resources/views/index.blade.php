@extends('layout')

@section('title', 'Marketplace')

@section('content')
<div class="container">
    <h1>Posts</h1>
    @auth
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Create New Post</a>
    @endauth
    @foreach ($posts as $post)
    <div class="card">
        <div class="card-content">
            <span class="card-title">{{ $post->title }}</span>
            <p class="card-description">{{ $post->content }}</p>
            <a href="{{ route('posts_show', $post->id) }}" class="btn btn-primary">Read More</a>
        </div>
    </div>
    @endforeach
</div>
@endsection

