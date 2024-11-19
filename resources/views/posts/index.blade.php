@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center mb-4">
        <img src="https://www.mssketch.com/wp-content/uploads/2022/08/MS-SKETCH-DESIGN-SERVICES-White.png" style="width: 200px; height: 100px;background: #000;border-radius: 5px;">
    </div>
    <h1 class="text-center mb-4">Posts</h1>
    <!-- Flash message -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    
    <!-- Import/Export Buttons -->
    <div class="d-flex justify-content-between mb-4">
        <a href="{{ route('posts.export') }}" class="btn btn-success">Export Posts</a>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#importModal">Import Posts</button>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Create New Post</a>
        
    </div>

    <!-- Import Modal -->
    <div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="importModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="importModalLabel">Import Posts</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('posts.import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="file" class="form-label">Select Excel or CSV File</label>
                            <input type="file" name="file" id="file" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Import</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Posts Table -->
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>S.no</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $index => $post)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
