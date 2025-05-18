<?php

namespace App\Http\Controllers;

class ShowBlogController extends Controller
{
    public function __invoke()
    {
        return view('show_blog');
    }
}
