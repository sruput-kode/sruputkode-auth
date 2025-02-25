<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginAction'])->name('loginAction');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerAction'])->name('registerAction');
});


Route::get('/email/verify', [AuthController::class, 'emailVerificationNotice'])
    ->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', [AuthController::class, 'emailVerify'])
    ->middleware(['auth', 'signed'])->name('verification.verify');

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/app', [AppController::class, 'index'])->name('home');

    // Logout
    Route::post('/logout', [AuthController::class, 'logoutAction'])->name('logout');
});
