<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact', [HomeController::class, 'sendContactMessage'])->name('contact');
Route::get('/documents/{filename}', [DocumentController::class, 'show'])->name('documents.show');
