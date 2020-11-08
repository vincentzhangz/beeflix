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

Route::get('/', 'MovieController@showAllGenre')->name('home');

Route::get('/detail/{id}', 'MovieController@showMovieDetail')->name('detail');

Route::get('/genre/{id}', 'MovieController@showMovieByGenre')->name('genre');
