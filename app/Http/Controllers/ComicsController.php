<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicsController extends Controller
{
    // public function __invoke()
    // {
    //     $comics = Comic::all();

    //     return view('comics', compact('comics'));
    // }

    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    public function show(Comic $comic)
    {
        dd($comic);
        // return view('comics.show', compact('comic'));
    }
}
