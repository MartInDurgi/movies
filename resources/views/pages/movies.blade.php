@extends('layout.sidebar')

@section('title')
    Movies
@endsection
@section('content')
    @foreach ($movies as $movie)
        @include('components.singlemovie')
    @endforeach
@endsection
