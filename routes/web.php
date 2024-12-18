<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LapanganController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('layouts.main');
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('/venue', function () {
    return view('venues.index');
});

Route::get('/activity', function () {
    return view('activities.index');
});



// Route::group(['middleware' => ['web']], function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// });


// Menampilkan daftar role
Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');
Route::get('/roles/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit');
Route::put('/roles/{role}', [RoleController::class, 'update'])->name('roles.update');
Route::delete('/roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy');

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');

// Route to display all Lapangan
Route::get('/lapangan', [LapanganController::class, 'index'])->name('lapangan.index');

// Route to show the form to create a new Lapangan
Route::get('/lapangan/create', [LapanganController::class, 'create'])->name('lapangan.create');

// Route to store a new Lapangan (POST request from the create form)
Route::post('/lapangan', [LapanganController::class, 'store'])->name('lapangan.store');

// Route to show the form to edit an existing Lapangan
Route::get('/lapangan/{lapangan}/edit', [LapanganController::class, 'edit'])->name('lapangan.edit');

// Route to update an existing Lapangan
Route::put('/lapangan/{lapangan}', [LapanganController::class, 'update'])->name('lapangan.update');

// Route to delete an existing Lapangan
Route::delete('/lapangan/{lapangan}', [LapanganController::class, 'destroy'])->name('lapangan.destroy');

// Route to display a single Lapangan (optional, if you want to show a single record)
Route::get('/lapangan/{lapangan}', [LapanganController::class, 'show'])->name('lapangan.show');


use App\Http\Controllers\BookingController;

// Show the list of bookings (index)
Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');

// Show the booking form (create)
Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');

// Store the booking (store)
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

// Show the booking edit form
Route::get('/bookings/{booking}/edit', [BookingController::class, 'edit'])->name('bookings.edit');

// Update the booking (update)
Route::put('/bookings/{booking}', [BookingController::class, 'update'])->name('bookings.update');

// Delete a booking (destroy)
Route::delete('/bookings/{booking}', [BookingController::class, 'destroy'])->name('bookings.destroy');
