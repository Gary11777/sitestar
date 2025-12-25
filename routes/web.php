<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Home page
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// About page
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

// Portfolio page
Route::get('/portfolio', function () {
    return view('pages.portfolio');
})->name('portfolio');

// Contact page
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
