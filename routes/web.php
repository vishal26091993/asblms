<?php

use App\Http\Controllers\Student\CertificateController;
use App\Http\Controllers\Student\DashboardController;
use App\Http\Controllers\Student\ExamController;
use App\Http\Controllers\Student\ProgramController;
use App\Http\Controllers\Student\StudProfileController;
use App\Http\Controllers\Student\StudyMaterialController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard',
        [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::get('/profile',
        [StudProfileController::class, 'index'])
        ->name('profile');

    Route::post(
        '/profile/update',
        [StudProfileController::class, 'update']
    )->name('profile.update');

    Route::get('/programs',
        [ProgramController::class, 'index'])
        ->name('programs');

    Route::get('/materials',
        [StudyMaterialController::class, 'index'])
        ->name('materials');

    Route::get('/exams',
        [ExamController::class, 'index'])
        ->name('exams');

    Route::get('/certificates',
        [CertificateController::class, 'index'])
        ->name('certificates');
});

require __DIR__.'/auth.php';
