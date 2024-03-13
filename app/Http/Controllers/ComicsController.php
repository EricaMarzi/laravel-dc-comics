<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicsController extends Controller
{
    public function __invoke()
    {
        $comics = config('comics');

        return view('comics', compact('comics'));
    }
}
