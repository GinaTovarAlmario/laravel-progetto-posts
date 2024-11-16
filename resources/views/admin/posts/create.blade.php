@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{route('admin.posts.store')}}" method="POST">
                    @method("POST")
                    @csrf
                    <div class="mb-3">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="author">Author</label>
                        <input type="text" name="author" id="author">
                    </div>  <div class="mb-3">
                        <label for="content">Content</label>
                        <textarea name="content" id="content" cols="30" rows="10">

                        </textarea>
                    </div>
                    <button type="submit">Create</button>
                    <button type="reset">Reset</button>
                </form>
            </div>
        </div>
    </div>
@endsection
