<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'App\Http\Controllers\MoviesController@index');
Route::get('/movie/{movie}', 'App\Http\Controllers\MoviesController@show');
Route::get('/menu/{menu}', 'App\Http\Controllers\MoviesController@menu');
Route::get('/login', 'App\Http\Controllers\MoviesController@login');
Route::post('/login', 'App\Http\Controllers\MoviesController@authenticate');
