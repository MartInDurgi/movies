@extends('layout.default')
@section('title')
    Create Movie
@endsection

@section('content')
        <form action="{{ url('addmovie') }}" method="POST">
            @csrf
                <div class="mb-3">
                        <label class="form-label" for="">Title</label>
                        <input class="form-control" type="text" name="title" placeholder="enter title" required>
                    
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">Genre</label>
                    <input class="form-control" type="text" name="genre" placeholder="enter Genre" required>
                
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">Storyline</label>
                    <input class="form-control" type="text" name="storyline" placeholder="enter storyline" required>
                
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">Director</label>
                    <input class="form-control" type="text" name="director" placeholder="enter director" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">Created</label>
                    <input class="form-control" type="number" name="created" placeholder="enter year of creation" required>
                
            </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">
                        Save movie
                    </button>
                </div>
        </form>


    @if ($errors->any())
        <div class="mt-5 alert alert-danger">
                <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach

                </ul>
        </div>
        
    @endif
@endsection