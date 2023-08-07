{{-- @foreach ($latestmovies as $latest)
    <a href="/movies/{{ $latest->id }}" class="list-group-item list-group-item-action py-3">
        <div class="small">{{ $latest->title }}</div>
    </a>
@endforeach --}}



@foreach ($latestmovies as $latest)
    <a href="/movies/{{ $latest->id }}" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
        <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>{{ $latest->title }}</span>
    </a>
@endforeach
