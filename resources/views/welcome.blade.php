@extends('layouts.master')

@section('styles')
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    {{--<link href="blog.css" rel="stylesheet">--}}
@endsection

@section('scripts')
    <script>
        Holder.addTheme('thumb', {
            bg: '#55595c',
            fg: '#eceeef',
            text: 'Thumbnail'
        });
    </script>
@endsection