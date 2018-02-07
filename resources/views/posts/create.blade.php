@extends('layouts.master')

@section('content')
    <h1>Publish a post</h1>

    <hr>

    <form method="POST" action="/posts">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
            <label for="body">Content:</label>
            <textarea class="form-control" id="body" name="body" placeholder="Type your post..."></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Publish</button>
        </div>

        @include('partials.errors')
    </form>
@endsection