<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\AuthController;


// =====================================================
// AUTH
// =====================================================

// LOGIN
Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

// REGISTER
Route::get('/register', [AuthController::class, 'showRegister'])
    ->name('register');

// PROSES LOGIN
Route::post('/login', [AuthController::class, 'login'])
    ->name('login.process');

// PROSES REGISTER
Route::post('/register', [AuthController::class, 'register'])
    ->name('register.process');


// =====================================================
// HOME
// =====================================================

Route::get('/', [HomeController::class, 'index'])
    ->name('home');


// =====================================================
// EXPLORE
// =====================================================

Route::get('/explore', function () {
    return view('explore');
})->name('explore');


// =====================================================
// PENGINAPAN / PROPERTIES
// =====================================================

Route::resource('properties', PropertyController::class);


// =====================================================
// PROFILE
// =====================================================

Route::middleware('auth')->group(function () {

    // Profile
    Route::get('/profile', [ProfileController::class, 'index'])
        ->name('profile');

    // Edit profile
    Route::get('/profile/edit', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    // Update profile
    Route::put('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    // Hapus akun
    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});


// =====================================================
// LOGOUT
// =====================================================

Route::post('/logout', function () {

    Auth::logout();

    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect()
        ->route('login')
        ->with('success', 'Kamu berhasil log out');
})->name('logout');
