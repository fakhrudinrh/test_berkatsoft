@extends('layouts.app')
@section('content')

<div class="movie-detail">
    <div class="container mx-auto px-4 pt-16 flex md:flex-row">
        <div class="flex-none">
            <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $detailMovie['poster_path'] }}" alt="" class="rounded-lg w-72">
        </div>
        <div class="md:ml-24">
            <h2 class="text-4xl font-semibold text-white">{{ $detailMovie['title'] }}</h2>
            <div class="flex items-center text-gray-400 text-sm">
                <svg class="fill-current text-yellow-500 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                </svg>
                <span class="ml-1">{{ $detailMovie['vote_average'] * 10 . '%' }}</span>
                <span class="mx-2">|</span>
                <span>{{ \Carbon\Carbon::parse($detailMovie['release_date'])->format('M d, y') }}</span>
                <span class="mx-2">|</span>
                <span>
                    @foreach ($detailMovie['genres'] as $genres)
                    {{ $genres['name'] }} @if(!$loop->last), @endif
                    @endforeach
                </span>
            </div>
            <div class="mt-4">
                <h4 class="font-bold text-2xl text-white">Overview</h4>
                <p class="text-gray-100">{{ $detailMovie['overview'] }}</p>
            </div>
        </div>
    </div>
</div>

@endsection('content')