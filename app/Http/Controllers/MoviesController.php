<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popularMovies = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIzZTk4MjQ3Yzc0YTZmODFmYTliMmE4ZWI3NTk3ODQ2YiIsInN1YiI6IjY0MGFhZTRiMThiNzUxMDA4NDI4MWNjYiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.Gjq2BvgA4SP8xoYO7wCmx6woMkiXQsBzIrtyYo-PWrs')
            ->get('https://api.themoviedb.org/3/movie/popular')
            ->json()['results'];
        $nowplayingMovies = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIzZTk4MjQ3Yzc0YTZmODFmYTliMmE4ZWI3NTk3ODQ2YiIsInN1YiI6IjY0MGFhZTRiMThiNzUxMDA4NDI4MWNjYiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.Gjq2BvgA4SP8xoYO7wCmx6woMkiXQsBzIrtyYo-PWrs')
            ->get('https://api.themoviedb.org/3/movie/now_playing')
            ->json()['results'];
        $topratedMovies = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIzZTk4MjQ3Yzc0YTZmODFmYTliMmE4ZWI3NTk3ODQ2YiIsInN1YiI6IjY0MGFhZTRiMThiNzUxMDA4NDI4MWNjYiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.Gjq2BvgA4SP8xoYO7wCmx6woMkiXQsBzIrtyYo-PWrs')
            ->get('https://api.themoviedb.org/3/movie/top_rated')
            ->json()['results'];
        $upcomingMovies = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIzZTk4MjQ3Yzc0YTZmODFmYTliMmE4ZWI3NTk3ODQ2YiIsInN1YiI6IjY0MGFhZTRiMThiNzUxMDA4NDI4MWNjYiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.Gjq2BvgA4SP8xoYO7wCmx6woMkiXQsBzIrtyYo-PWrs')
            ->get('https://api.themoviedb.org/3/movie/upcoming')
            ->json()['results'];

        $data = [
            'popularMovies' => $popularMovies,
            'nowplayingMovies' => $nowplayingMovies,
            'topratedMovies' => $topratedMovies,
            'upcomingMovies' => $upcomingMovies,
        ];

        return view('home', $data);
    }

    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        dd('berhasil');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function menu($menu)
    {
        $movies = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIzZTk4MjQ3Yzc0YTZmODFmYTliMmE4ZWI3NTk3ODQ2YiIsInN1YiI6IjY0MGFhZTRiMThiNzUxMDA4NDI4MWNjYiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.Gjq2BvgA4SP8xoYO7wCmx6woMkiXQsBzIrtyYo-PWrs')
            ->get('https://api.themoviedb.org/3/movie/' . $menu)
            ->json()['results'];


        if ($menu == 'now_playing') {
            $title = 'Now Playing Movies';
        } elseif ($menu == 'popular') {
            $title = 'Popular Movies';
        } elseif ($menu == 'top_rated') {
            $title = 'Top Rated Movies';
        } elseif ($menu == 'upcoming') {
            $title = 'Up Coming Movies';
        }

        $data = [
            'title' => $title,
            'movies' => $movies
        ];

        return view('submenu', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detailMovies = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIzZTk4MjQ3Yzc0YTZmODFmYTliMmE4ZWI3NTk3ODQ2YiIsInN1YiI6IjY0MGFhZTRiMThiNzUxMDA4NDI4MWNjYiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.Gjq2BvgA4SP8xoYO7wCmx6woMkiXQsBzIrtyYo-PWrs')
            ->get('https://api.themoviedb.org/3/movie/' . $id)
            ->json();

        $data = [
            'detailMovie' => $detailMovies
        ];

        return view('details', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
