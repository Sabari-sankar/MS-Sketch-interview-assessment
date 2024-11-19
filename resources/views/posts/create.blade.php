@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Create New Post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" id="content" class="form-control" required>{{ old('content') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
@endsection
