<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\bookingController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\StaffController;

// REGISTER
Route::get('/register', [RegisterController::class, 'showForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

// LOGIN
Route::get('/login', [LoginController::class, 'showForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

Route::get('/room', [RoomController::class, 'index'])->name('room');
Route::post('/room', [RoomController::class, 'index'])->name('room');

// BOOKINGS
Route::get('/bookings', [bookingController::class, 'index'])->name('bookings');

// PAYMENTS
Route::get('/payments', [PaymentsController::class, 'index'])->name('payments');
route::post('payments/store', [PaymentsController::class, 'store'])->name('payments.store');

// STAFF
Route::get('/staff', [StaffController::class, 'index'])->name('staff');


route::get('/guests', [GuestController::class, 'index'])->name('guests');

// // GUESTS
// Route::get('/guests', function () {
//     return view('guests');
// })->name('guests');

// HOME
Route::get('/', function () {
    return view('home');
});

// DASHBOARD
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');





Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login');
})->name('logout');




 
//  Route::get('/deashboard', function (){
//     return view('deashboar');
//   });

//  Route::get('/register', function (){
//     return view('register');
//  });

//   Route::get('/login', function (){
//     return view('login');
//  });

