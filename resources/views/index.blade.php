@extends('layouts.master')

@section('content')

    @foreach($posts as $post)
        @include('posts.post')
    @endforeach

    <!-- Pager -->
    <div class="clearfix">
        <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
    </div>
@endsection