<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    public function index() {
        $comics = Comic::all();
        $headerLinks = config('headerLinks');
        $footerLinks = config('footerLinks');

    return view('home', compact('comics', 'headerLinks', 'footerLinks'));
    }
}
