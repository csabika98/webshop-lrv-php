<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/products', function () {
    return view('products');
});


#Route::get('/', function () {
#    return view('index');
#});

#Route::get('/', function () {
#    return view('welcome');
#});

# Creating GET request to serve the FAQ page
Route::get('/faq', function() {
    return view('faq');
});

// Posts routes
Route::get('/', [PostController::class, 'index'])->name('posts.index');
#Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [PostController::class,'show'])->name('posts_show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
