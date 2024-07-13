<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KeluhController;
use App\Http\Controllers\VisiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/abouts', [HomeController::class, 'abouts'])->name('abouts');
Route::get('/teacher', [HomeController::class, 'teacher'])->name('teacher');
Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');
Route::get('/visi', [HomeController::class, 'visi'])->name('visi');
Route::get('/kurikulum', [HomeController::class, 'kurikulum'])->name('kurikulum');

// login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('auth');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register_proses', [LoginController::class, 'register_proses'])->name('register_proses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/forgot', [LoginController::class, 'forgot'])->name('forgot');
Route::post('/forgot-password-act', [LoginController::class, 'forgot_password_act'])->name('forgot-password-act');
Route::get('/validasi-forgot-password/{token}', [LoginController::class, 'validasi_forgot_password'])->name('validasi-forgot-password');
Route::post('/validasi-forgot-password-act', [LoginController::class, 'validasi_forgot_password_act'])->name('validasi-forgot-password-act');
Route::post('/register-proses', [LoginController::class, 'register_proses'])->name('register-proses');


// dashboard and CRUD routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'home'])->name('dashboard');
    Route::get('/dashboard/data', [DashboardController::class, 'getData'])->name('dashboard.data');
    Route::resource('guru', GuruController::class);
    Route::resource('about', AboutController::class);
    Route::resource('history', HistoryController::class);
    Route::resource('prestasi', PrestasiController::class);
    Route::resource('keluh', KeluhController::class);
    Route::resource('visimisi', VisiController::class);
});


