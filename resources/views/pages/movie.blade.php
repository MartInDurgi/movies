@extends('layout.default')

@section('title')
    {{ $movie->title }}
@endsection

@section('content')
    <h1>{{ $movie->title }}</h1>
    <p>{{ $movie->storyline }}</p>
    <p>{{ $movie->director }}</p>
    <a href="/genres/{{ $movie->genre }}">{{ $movie->genre }}</a>
    <p>{{ $movie->created }}</p>

    <h5 class="mt-5">comments
        <div>
            @foreach ($movie->comments as $comment)
                <p>{{ $comment->content }}</p>
            @endforeach
            <form action="{{ url('comment') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label" for="">Leave Comment</label>
                    <textarea class="form-control" type="text" name="content" placeholder="enter comment" required></textarea>
                    <input type="hidden" name="movie_id" value="{{ $movie->id }}">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">
                        Add Comment
                    </button>
                </div>
            </form>

        </div>

    </h5>

    @if ($errors->any())
        <div class="mt-5 alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>
        </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

@endsection
