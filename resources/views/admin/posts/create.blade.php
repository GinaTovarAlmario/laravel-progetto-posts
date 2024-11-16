@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 my-0 mx-auto">
                <form action="{{ route('admin.posts.store') }}" method="POST">
                    @method('POST')
                    @csrf
                    <div class="mb-3">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}">
                        @error('title')
                            <div class="alert alert-warning">
                                {{ $mesage }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="author">Author</label>
                        <input type="text" name="author" id="author" class="form-control" value="{{old('author')}}">
                        @error('author')
                            <div class="alert alert-warning">
                                {{ $mesage }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="content">Content</label>
                        <textarea name="content" id="content" cols="25" rows="8" class="form-control">
                            {{old('content')}}
                        </textarea>
                        @error('content')
                            <div class="alert alert-warning">
                                {{ $mesage }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                    <button type="reset" class="btn btn-success">Reset</button>
                </form>
            </div>
        </div>
    </div>
@endsection
