<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Middleware\AdminMiddleware;

Route::get('/products', function () {
    return view('products');
});

# Creating GET request to serve the FAQ page
Route::get('/faq', function() {
    return view('faq');
});

// Posts routes

Route::get('/posts/create', [PostController::class, 'create'])->name('posts_create')->middleware(AdminMiddleware::class);
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts_destroy')->middleware(AdminMiddleware::class);
Route::post('/posts', [PostController::class, 'store'])->name('posts_store');
Route::get('/posts/{id}', [PostController::class,'show'])->name('posts_show');

// Public routes
Route::get('/', [PostController::class, 'index'])->name('posts_index');

// Authenticated routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Define authenticated routes here if needed
    //return Redirect::to('/');
});



Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');