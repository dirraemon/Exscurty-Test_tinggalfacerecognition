<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ExamController;

// ==========================
// HALAMAN UMUM
// ==========================
Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-camera', function () {
    return view('test-camera');
});

// ==========================
// AUTHENTICATION (Login & Register)
// ==========================
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

// ==========================
// PARTICIPANT (Ujian)
// ==========================
Route::get('/participant/exam', [ExamController::class, 'show']);

// ==========================
// ADMIN DASHBOARD
// ==========================
Route::middleware(['auth'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Dashboard
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        // Ujian
        Route::get('/ujian', function () {
            return view('admin.ujian.index');
        })->name('ujian.index');

        Route::get('/ujian/create', function () {
            return view('admin.ujian.create');
        })->name('ujian.create');

        // Soal
        Route::get('/soal', function () {
            return view('admin.soal.index');
        })->name('soal.index');

        // Peserta
        Route::get('/peserta', function () {
            return view('admin.peserta.index');
        })->name('peserta.index');

        // Log Aktivitas
        Route::get('/logs', function () {
            return view('admin.logs.index');
        })->name('logs.index');

        // Pengaturan
        Route::get('/settings', function () {
            return view('admin.settings.index');
        })->name('settings.index');

    });