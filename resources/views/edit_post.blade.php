@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Post</h1>
        <form method="POST" action="{{ route('posts.update', $post) }}">
            @csrf
            @method('PUT')

            <div>
                <label for="title">Title</label>
                <input id="title" type="text" name="title" value="{{ $post->title }}" required>
            </div>

            <div class="mt-4">
                <label for="body">Body</label>
                <textarea id="body" name="body" rows="6" required>{{ $post->body }}</textarea>
            </div>

            <div class="mt-4">
                <button type="submit">Update Post</button>
            </div>
        </form>
    </div>
@endsection