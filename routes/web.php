<?php

use App\Http\Controllers\Admin\AdminAuthController;
/*
|--------------------------------------------------------------------------
| Student Controllers
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\CertificateController as AdminCertificateController;
use App\Http\Controllers\Admin\ExamController as AdminExamController;
use App\Http\Controllers\Admin\ProgramController as AdminProgramController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\StudyMaterialController as AdminStudyMaterialController;
/*
|--------------------------------------------------------------------------
| Admin Controllers
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Student\CertificateController as StudentCertificateController;
use App\Http\Controllers\Student\DashboardController;
use App\Http\Controllers\Student\ExamController as StudentExamController;
use App\Http\Controllers\Student\ProgramController as StudentProgramController;
use App\Http\Controllers\Student\StudProfileController;
use App\Http\Controllers\Student\StudyMaterialController as StudentStudyMaterialController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Website
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('index');
});

/*
|--------------------------------------------------------------------------
| Student Panel
|--------------------------------------------------------------------------
*/

Route::middleware('auth')
    ->name('student.')
    ->group(function () {
        Route::get(
            '/dashboard',
            [DashboardController::class, 'index']
        )->name('dashboard');

        Route::get(
            '/profile',
            [StudProfileController::class, 'index']
        )->name('profile');

        Route::post(
            '/profile/update',
            [StudProfileController::class, 'update']
        )->name('profile.update');

        Route::get(
            '/programs',
            [StudentProgramController::class, 'index']
        )->name('programs');

        Route::get(
            '/materials',
            [StudentStudyMaterialController::class, 'index']
        )->name('materials');

        Route::get(
            '/exams',
            [StudentExamController::class, 'index']
        )->name('exams');

        Route::get(
            '/certificates',
            [StudentCertificateController::class, 'index']
        )->name('certificates');
    });

/*
|--------------------------------------------------------------------------
| Admin Authentication
|--------------------------------------------------------------------------
*/

Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get(
            '/',
            [AdminAuthController::class, 'login']
        )->name('login');

        Route::post(
            '/login',
            [AdminAuthController::class, 'authenticate']
        )->name('authenticate');
    });

/*
|--------------------------------------------------------------------------
| Admin Panel
|--------------------------------------------------------------------------
*/

Route::prefix('admin')
    ->name('admin.')
    ->middleware('admin')
    ->group(function () {
        Route::get(
            '/dashboard',
            [AdminDashboardController::class, 'index']
        )->name('dashboard');

        Route::post(
            '/logout',
            [AdminAuthController::class, 'logout']
        )->name('logout');

        Route::get(
            '/students',
            [StudentController::class, 'index']
        )->name('students');

        Route::get(
            '/programs',
            [AdminProgramController::class, 'index']
        )->name('programs');

        Route::get(
            '/materials',
            [AdminStudyMaterialController::class, 'index']
        )->name('materials');

        Route::get(
            '/exams',
            [AdminExamController::class, 'index']
        )->name('exams');

        Route::get(
            '/certificates',
            [AdminCertificateController::class, 'index']
        )->name('certificates');
    });

/*
|--------------------------------------------------------------------------
| Temporary Route
|--------------------------------------------------------------------------
*/

Route::get('/hash', function () {
    return bcrypt('123456');
});

/*
|--------------------------------------------------------------------------
| Laravel Auth Routes
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';
