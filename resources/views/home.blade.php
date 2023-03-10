@extends('layouts.app')
@section('content')

<div class="container mx-auto px-4 pt-16">
    <div class="popular-movies">
        <h2 class="capitalize text-white text-lg font-semibold">Popular Movies</h2>
        <div class="grid grid-cols-8 gap-8">
            @foreach($popularMovies as $movie)
            @if($loop->index < 8) <div class="mt-6">
                <div class="flex item-center justify-center">
                    <a href="{{ '/movie/' . $movie['id'] }}">
                        <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $movie['poster_path'] }}" alt="" class="hover:opacity-50 transition ease-in-out duration-150 rounded-lg">
                    </a>
                </div>
                <div class="mt-1">
                    <a href="#" class="text-md pt-2 text-white font-semibold">
                        {{ $movie['title'] }}
                    </a>
                    <div class="flex items-center text-gray-400 text-sm">
                        <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, y') }}</span>
                    </div>
                </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
<div class="nowplaying-movies mt-8">
    <h2 class="capitalize text-white text-lg font-semibold">Now Playing Movies</h2>
    <div class="grid grid-cols-8 gap-8">
        @foreach($nowplayingMovies as $movie)
        @if($loop->index < 8) <div class="mt-6">
            <div class="flex item-center justify-center">
                <a href="#">
                    <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $movie['poster_path'] }}" alt="" class="hover:opacity-50 transition ease-in-out duration-150 rounded-lg">
                </a>
            </div>
            <div class="mt-1">
                <a href="#" class="text-md pt-2 text-white font-semibold">
                    {{ $movie['title'] }}
                </a>
                <div class="flex items-center text-gray-400 text-sm">
                    <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, y') }}</span>
                </div>
            </div>
    </div>
    @endif
    @endforeach
</div>
</div>
<div class="toprated-movies mt-8">
    <h2 class="capitalize text-white text-lg font-semibold">Top Rated Movies</h2>
    <div class="grid grid-cols-8 gap-8">
        @foreach($topratedMovies as $movie)
        @if($loop->index < 8) <div class="mt-6">
            <div class="flex item-center justify-center">
                <a href="#">
                    <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $movie['poster_path'] }}" alt="" class="hover:opacity-50 transition ease-in-out duration-150 rounded-lg">
                </a>
            </div>
            <div class="mt-1">
                <a href="#" class="text-md pt-2 text-white font-semibold">
                    {{ $movie['title'] }}
                </a>
                <div class="flex items-center text-gray-400 text-sm">
                    <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, y') }}</span>
                </div>
            </div>
    </div>
    @endif
    @endforeach
</div>
</div>
<div class="upcoming-movies mt-8">
    <h2 class="capitalize text-white text-lg font-semibold">Upcoming Movies</h2>
    <div class="grid grid-cols-8 gap-8">
        @foreach($upcomingMovies as $movie)
        @if($loop->index < 8) <div class="mt-6">
            <div class="flex item-center justify-center">
                <a href="#">
                    <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $movie['poster_path'] }}" alt="" class="hover:opacity-50 transition ease-in-out duration-150 rounded-lg">
                </a>
            </div>
            <div class="mt-1">
                <a href="#" class="text-md pt-2 text-white font-semibold">
                    {{ $movie['title'] }}
                </a>
                <div class="flex items-center text-gray-400 text-sm">
                    <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, y') }}</span>
                </div>
            </div>
    </div>
    @endif
    @endforeach
</div>
</div>
</div>

@endsection('content')