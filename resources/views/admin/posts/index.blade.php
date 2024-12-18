@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center fw-bold">
                    Post list:
                </h1>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">
                        Create Post
                    </a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                            <tr>
                                <th>
                                    {{$post->id}}
                                </th>
                                <td>
                                    {{$post->title}}
                                </td>
                                <td>
                                    {{$post->author}}
                                </td>
                                <td class="d-flex justify-content-around">
                                    <a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-sm btn-success">Show</a>
                                    <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{route('admin.posts.delete', $post->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            DELETE
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                No post available
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div>
                    {{$posts->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
