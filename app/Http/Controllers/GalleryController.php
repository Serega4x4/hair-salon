<?php

namespace App\Http\Controllers;

class GalleryController extends Controller
{
    public function __invoke()
    {
        return view('gallery');
    }
}
