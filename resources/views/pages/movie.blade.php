@extends('layout.default')

@section('title')
    {{ $movie->title }}
@endsection

@section('content')
    <h1>{{ $movie->title }}</h1>
    <p>{{ $movie->storyline }}</p>
    <p>{{ $movie->director }}</p>
    <p>{{ $movie->genre }}</p>
    <p>{{ $movie->created }}</p>

<h5 class="mt-5">comments
<div>
    @foreach ($movie->comments as $comment)
        <p>{{ $comment->content }}</p>
    @endforeach


</div>

</h5>



@endsection
