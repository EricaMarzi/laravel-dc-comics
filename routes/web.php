<?php

use App\Http\Controllers\ComicsController;
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

    return view('characters');
})->name('characters');

Route::get('/movie', function () {

    return view('movie');
})->name('movie');

Route::get('/tv', function () {

    return view('TV');
})->name('TV');

Route::get('/games', function () {

    return view('games');
})->name('games');

Route::get('/collectibles', function () {

    return view('collectibles');
})->name('collectibles');

Route::get('/videos', function () {

    return view('videos');
})->name('videos');

Route::get('/fans', function () {

    return view('fans');
})->name('fans');

Route::get('/news', function () {

    return view('news');
})->name('news');

Route::get('/shop', function () {

    return view('shop');
})->name('shop');




// Lista fumetti
Route::get('/', [ComicsController::class, 'index'])->name('comics.index'); //Rotta home/lista comics
Route::get('/create', [ComicsController::class, 'create'])->name('comics.create'); //Rotta per il form di creazione
Route::get('/{comic}', [ComicsController::class, 'show'])->name('comics.show'); // Rotta per il singolo comic
Route::get('/{comic}/edit', [ComicsController::class, 'edit'])->name('comics.edit'); //Rotta per il form di modifica
Route::put('/{comic}', [ComicsController::class, 'update'])->name('comics.update'); // Rotta per il salvataggio sul DB della modifica
Route::post('/', [ComicsController::class, 'store'])->name('comics.store'); // Rotta per il salvataggio sul DB
Route::delete('/{comic}', [ComicsController::class, 'destroy'])->name('comics.destroy'); // Rotta per l'eliminazione
