<?php

use Illuminate\Support\Facades\Route;

Route::get('/products', function () {
    return view('products');
});


Route::get('/', function () {
    return view('index');
});

# Creating GET request to serve the FAQ page
Route::get('/faq', function() {
    return view('faq');
});
