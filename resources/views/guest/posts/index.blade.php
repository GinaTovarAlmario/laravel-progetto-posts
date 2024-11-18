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
                <div class="row justify-content-center">
                    @forelse ($posts as $index => $post)
                        <div class="col-3 mt-3 mb-4 me-2 card">
                            <h2>
                                {{$post->id}} - {{$post->title}}
                            </h2>
                            <h3>
                                {{$post->author}}
                            </h3>
                            <p class="fs-4">
                                {{substr($post->content,0,40) }}..
                            </p>
                            <a href="{ route('guest.posts.show',$post)}" class="btn btn-outline-primary mb-3">Read More</a>
                        </div>
                    @empty
                        <div class="col-12">
                            <h1>No posts available</h1>
                        </div>
                    @endforelse
                <div>
                    {{$posts->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
