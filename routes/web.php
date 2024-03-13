<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/characters', function () {
    $title = 'Characters';

    return view('characters', compact('title'));
})->name('characters');

// Lista fumetti
Route::get('/', function () {
    $title = 'Comics';

    $comics = config('comics');

    return view('comics', compact('title', 'comics'));
})->name('comics');

// Dettaglio fumetto
Route::get('/comics/{index}', function ($index) {
    $title = 'Comic';

    $comics = config('comics');

    return view('comics.comic', compact('title'), ['comics' => $comics[$index]]);
})->name('comic');

Route::get('/movie', function () {
    $title = 'Movie';


    return view('movie', compact('title'));
})->name('movie');

Route::get('/tv', function () {
    $title = 'TV';


    return view('TV', compact('title'));
})->name('TV');

Route::get('/games', function () {
    $title = 'Games';


    return view('games', compact('title'));
})->name('games');

Route::get('/collectibles', function () {
    $title = 'Collectible';


    return view('collectibles', compact('title'));
})->name('collectibles');

Route::get('/videos', function () {
    $title = 'Videos';


    return view('videos', compact('title'));
})->name('videos');

Route::get('/fans', function () {
    $title = 'Fans';


    return view('fans', compact('title'));
})->name('fans');

Route::get('/news', function () {
    $title = 'News';


    return view('news', compact('title'));
})->name('news');

Route::get('/shop', function () {
    $title = 'Shop';


    return view('shop', compact('title'));
})->name('shop');
