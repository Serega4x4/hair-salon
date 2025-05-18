<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ShowBlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class)->name('main.index');
Route::get('/services', GalleryController::class)->name('main.services');
Route::get('/gallery', GalleryController::class)->name('main.gallery');
Route::get('/about', AboutController::class)->name('main.about');
Route::get('/blog', BlogController::class)->name('main.blog');
Route::get('/show_blog', ShowBlogController::class)->name('main.show_blog');
Route::get('/contact', ContactController::class)->name('main.contact');