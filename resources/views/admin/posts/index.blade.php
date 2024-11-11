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
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                            <tr>
                                <th>

                                </th>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <a href="{{route('admin.posts.show', $post)}}" class="btn btn-success">Show</a>
                                    <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-warning">Edit</a>
                                    <form action="{{route('admin.posts.delete', $post->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit">
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
            </div>
        </div>
    </div>
@endsection
