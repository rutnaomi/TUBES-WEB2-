<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Landing ke halaman login
Route::get('/', [AuthController::class, 'showLogin'])->name('login');

// Proses login
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard untuk masing-masing peran
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/mahasiswa', [DashboardController::class, 'mahasiswa'])->name('dashboard.mahasiswa');

    // Dropdown Mahasiswa
    Route::get('/krs', function () {
        return view('mahasiswa.krs');
    })->name('krs.index');

    // Dropdown Report
    Route::get('/cetak-khs-2', function () {
        return view('mahasiswa.khs');
    })->name('khs.cetak');

    Route::get('/dashboard/dosen', [DashboardController::class, 'dosen'])->name('dashboard.dosen');
    Route::get('/dashboard/mahasiswa-pmmdn', [DashboardController::class, 'pmmdn'])->name('dashboard.pmmdn');
});


