@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Edit Post</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $post->title) }}" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" id="content" class="form-control" required>{{ old('content', $post->content) }}</textarea>
        </div>
        <button type="submit" class="btn btn-warning">Update Post</button>
    </form>
@endsection
