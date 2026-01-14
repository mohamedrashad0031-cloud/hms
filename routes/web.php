<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\StaffController;

// REGISTER
Route::get('/register', [RegisterController::class, 'showForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

// LOGIN
Route::get('/login', [LoginController::class, 'showForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// LOGOUT
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login');
})->name('logout');

// HOME
Route::get('/', function () { return view('home'); })->name('home');

// =======================
// AUTH ROUTES (ROLE-BASED)
// =======================
Route::middleware(['auth'])->group(function () {

    // ADMIN ROUTES
    Route::middleware('role:admin')->prefix('admin')->group(function () {
        Route::get('dashboard', function(){ return view('admin.dashboard'); })->name('admin.dashboard');

        // Staff management
        Route::get('staff', [StaffController::class,'index'])->name('admin.staff');
        Route::post('staff/store', [StaffController::class,'store'])->name('admin.staff.store');

        // Rooms management
        Route::resource('rooms', RoomController::class);

        // Bookings management
        Route::resource('bookings', BookingController::class);

        // Payments management
        Route::get('payments', [PaymentsController::class,'index'])->name('admin.payments');
        Route::post('payments/store', [PaymentsController::class,'store'])->name('admin.payments.store');
// DASHBOARD
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

    });

    // STAFF ROUTES
    Route::middleware('role:staff')->prefix('staff')->group(function () {
        Route::get('dashboard', function(){ return view('staff.dashboard'); })->name('staff.dashboard');

        // Rooms management (no staff CRUD)
        Route::resource('rooms', RoomController::class)->except(['destroy']);

        // Bookings management
        Route::resource('bookings', BookingController::class)->except(['destroy']);

        // Payments
        Route::get('payments', [PaymentsController::class,'index'])->name('staff.payments');
        Route::post('payments/store', [PaymentsController::class,'store'])->name('staff.payments.store');
    });

    // GUEST/USER ROUTES
    Route::middleware('role:user')->prefix('user')->group(function () {
        Route::get('dashboard', function(){ return view('user.dashboard'); })->name('user.dashboard');
        Route::get('rooms', [RoomController::class,'index'])->name('user.rooms');
        Route::get('bookings', [BookingController::class,'index'])->name('user.bookings');
    });

});
