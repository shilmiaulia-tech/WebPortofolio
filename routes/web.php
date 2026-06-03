<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;

// Halaman Utama
Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman About
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Halaman Education
Route::get('/education', [EducationController::class, 'index'])->name('education');

// Halaman Achievement
Route::get('/achievement', [AchievementController::class, 'index'])->name('achievement');

// Halaman Portfolio (list + detail)
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/portfolio/{slug}', [PortfolioController::class, 'show'])->name('portfolio.show');

// Halaman Experience
Route::get('/experience', [ExperienceController::class, 'index'])->name('experience');

// Halaman Gallery
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

// Halaman Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');