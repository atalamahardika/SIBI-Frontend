<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GuestController::class, 'landing'])->name('landing');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

Route::get('/klasifikasi', function () {
    return view('inference');
})->name('klasifikasi');
Route::post('/klasifikasi/predict', [GuestController::class, 'classify'])->name('klasifikasi.predict');
