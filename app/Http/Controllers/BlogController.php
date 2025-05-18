<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    public function __invoke()
    {
        return view('blog');
    }
}
