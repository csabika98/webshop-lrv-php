@extends('layout')

@section('title', $post->title)

@section('content')
<div class="container">
    <div class="card">
        <div class="card-content">
            <span class="card-title">{{ $post->title }}</span>
            <p class="card-description">{{ $post->content }}</p>
        </div>
    </div>
</div>
@endsection