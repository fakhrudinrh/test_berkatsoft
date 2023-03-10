@extends('layouts.app')
@section('content')

<div class="container mx-auto px-4 pt-16">
    <div class="menu-movies">
        <h2 class="capitalize text-white text-lg font-semibold">{{ $title }}</h2>
        <div class="grid grid-cols-8 gap-8">
            <div class="mt-6">
                <div class="flex item-center justify-center">
                    <a href="#">
                        <img src="https://3.bp.blogspot.com/-l1wvYQOYX60/XEQwXPmULeI/AAAAAAAAMeE/L-NvvXbwb8ADah01TFPcob-0sYazVPAggCLcBGAs/s640/black_panther_ver3.jpg" alt="" class="hover:opacity-50 transition ease-in-out duration-150 rounded-lg">
                    </a>
                </div>
                <div class="mt-1">
                    <a href="#" class="text-md pt-2 text-white font-semibold">
                        Black Panthers
                    </a>
                    <div class="flex items-center text-gray-400 text-sm">
                        <span>Mar 24, 2021</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')