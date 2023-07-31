@extends('layout.default')

@section('title')
Movies
@endsection

@section('content')

<div>
    @foreach ($movies as $movie)
        @include('components.singlemovie')
    @endforeach
</div>
@endsection



<div class="card shadow-sm">
      <p class="card-text"></p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
{{--               <a href="/posts" type="button" class="btn btn-sm btn-outline-secondary">nesto</a>
 --}}            </div>
          </div>
        </div>
      </div>