<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ShowBlogController;

Route::get('/', IndexController::class)->name('main.index');
Route::get('/services', ServicesController::class)->name('main.services');
Route::get('/gallery', GalleryController::class)->name('main.gallery');
Route::get('/about', AboutController::class)->name('main.about');
Route::get('/blog', BlogController::class)->name('main.blog');
Route::get('/show_blog', ShowBlogController::class)->name('main.show_blog');
Route::get('/contact', ContactController::class)->name('main.contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('role:superuser')
    ->prefix('admin')
    ->group(function () {
        Route::get('/', AdminIndexController::class)->name('admin.index');
    });

require __DIR__ . '/auth.php';
