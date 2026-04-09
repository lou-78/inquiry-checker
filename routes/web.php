<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;

Route::get('/', [InquiryController::class, 'index'])->name('home');
Route::post('/analyze', [InquiryController::class, 'analyze'])->name('analyze');
Route::get('/history', [InquiryController::class, 'history'])->name('history');
