@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body text-black">
                        <h5 class="card-title">
                            TITLE: {{$post->title}}
                        </h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">
                            AUTHOR: {{$post->author}}
                        </h6>
                        <p class="card-text">
                            DESCRIPTION: {{ $post->content }}
                        </p>
                        <a href="{{route('admin.posts.index')}}" class="btn btn-primary">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
