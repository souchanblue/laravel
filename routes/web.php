<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Halaman Utama
Route::get('/home', [PageController::class, 'home'])->name('home');

// Halaman About Me
Route::get('/about', [PageController::class, 'about'])->name('about');

// Halaman Projects
Route::get('/projects', [PageController::class, 'projects'])->name('projects');

// Halaman Contact
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

