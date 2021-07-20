<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class HomeController extends Controller
{
    public function index() {
        $footerLinks = config('footerLinks');

    return view('home', compact('footerLinks'));
    }
}
