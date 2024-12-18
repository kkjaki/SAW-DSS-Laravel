<?php

use App\Http\Controllers\AlternativeController;
use App\Http\Controllers\AlternativeValueController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('dashboard', [AlternativeValueController::class, 'index'])->name('dashboard');
    Route::resource('criteria', CriteriaController::class);
    Route::resource('alternatives', AlternativeController::class);
    Route::resource('alternativevalue', AlternativeValueController::class);
});

require __DIR__ . '/auth.php';
