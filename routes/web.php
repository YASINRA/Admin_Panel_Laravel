<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\AdminController;
use App\Http\Controllers\VendorPanel\VendorController;
use App\Http\Controllers\CustomerPanel\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [CustomerController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('admin/profile', [AdminController::class, 'edit_profile'])->name('admin.profile');
});

Route::middleware(['auth', 'role:vendor'])->group(function () {
    Route::get('vendor/dashboard', [VendorController::class, 'index'])->name('vendor.dashboard');
});