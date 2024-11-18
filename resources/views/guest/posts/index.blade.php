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
                <div class="row">
                    @forelse ($posts as $index => $post)
                        <div class="col-3 me-2 mb-3">
                            {{$post->id}}
                            {{$post->title}}
                            {{$post->author}}
                            {{$post->content}}
                        </div>
                    @empty
                        <div>
                            No posts available
                        </div>
                    @endforelse
                <div>
                    {{$posts->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
