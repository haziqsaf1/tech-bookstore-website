<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

// Redirect root URL to books index
Route::get('/', function () {
    return redirect()->route('books.index');
});

// Alias home route
Route::get('/home', function () {
    return redirect()->route('books.index');
})->name('home');

// Registers all 7 RESTful routes for books automatically
Route::resource('books', BookController::class);