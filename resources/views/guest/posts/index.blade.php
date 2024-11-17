@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center fw-bold">
                    Latest Posts:
                </h1>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                            <tr>
                                <th>
                                    {{$post->id}}
                                </th>
                                <td>
                                    <a href="{{route('guest.posts.show',$post)}}">
                                        {{$post->title}}
                                    </a>
                                </td>
                                <td>
                                    {{$post->author}}
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
