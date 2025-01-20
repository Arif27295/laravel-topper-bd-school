<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('auth.login');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';





Route::get('/dashboard', [adminController::class, 'index'])->name('dashboard');
Route::get('/event', [adminController::class, 'event_management'])->name('event_management');
Route::get('/student', [adminController::class, 'add_student'])->name('add_student');
Route::get('/teacher', [adminController::class, 'add_teacher'])->name('add_teacher');
Route::post('/upzila', [adminController::class, 'upzila'])->name('upzila');

