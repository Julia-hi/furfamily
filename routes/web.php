<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::any('/', function () {
    return view('index');
});

/* Route::get('/kotomama', function () {
    return view('adminpages.dashboard');
})->middleware(['auth', 'verified'])->name('admin-dashboard'); */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/kotomama', [AdminDashboardController::class, 'index'])->name('admin-dashboard');
});

require __DIR__.'/auth.php';
