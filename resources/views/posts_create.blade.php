<!-- resources/views/posts/create.blade.php -->

@extends('layout')

@section('title', 'Add New Post')

@section('content')
<div class="container">
    <h1>Add New Post</h1>
    <form method="post" action="{{ route('posts_store') }}">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="content">Content:</label>
            <textarea class="form-control" id="content" name="content" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

