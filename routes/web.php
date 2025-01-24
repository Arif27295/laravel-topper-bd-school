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
Route::post('/post_office', [adminController::class, 'post_office'])->name('post_office');
Route::post('/post_code', [adminController::class, 'post_code'])->name('post_code');

Route::get('/student_list', [adminController::class, 'student_list'])->name('student_list');
Route::post('/student', [adminController::class, 'create_student'])->name('create_student');
Route::get('/update_student_id/{id}', [adminController::class, 'update_student_id'])->name('update_student_id');
Route::get('/delete_student_id/{id}', [adminController::class, 'delete_student_id'])->name('delete_student_id');
Route::put('/update_student/{id}', [adminController::class, 'update_student'])->name('update_student');
