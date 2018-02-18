@extends('layouts.master')

@section('content')
    <h1>{{ $post->title }}</h1>

    <p>{{ $post->body }}</p>

    <hr>

    <div class="comments">
        <ul class="list-group">
        @foreach($post->comments as $comment)
            <li class="list-group-item">
                <strong>{{ $comment->created_at->diffForHumans() }} by {{ $comment->user->name }}: &nbsp;</strong>
                {{ $comment->body }}
            </li>
        @endforeach
        </ul>
    </div>

    <div class="card">
        <div class="card-body">
            <form method="POST" action="/posts/{{ $post->id }}/comments">
                {{ csrf_field() }}

                <div class="form-group">
                    <textarea class="form-control" id="body" name="body" placeholder="Type your comment..."></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add comment</button>
                </div>

                @include('partials.errors')
            </form>
        </div>
    </div>
@endsection