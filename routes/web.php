<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/loginto', [HomeController::class, 'loginto'])->name('loginto');

Route::get('/register/general-info', [RegisterController::class, 'general_info'])->name('register.general-info');
Route::post('/register/general-info', [RegisterController::class, 'general_infoPost']);

Route::get('/register/mobile-info', [RegisterController::class, 'mobile_info'])->name('register.mobile-info');
Route::post('/register/mobile-info', [RegisterController::class, 'mobile_infoPost']);

Route::get('/register/bank-info', [RegisterController::class, 'bank_info'])->name('register.bank-info');
Route::post('/register/bank-info', [RegisterController::class, 'bank_infoPost']);

Route::get('/register/password', [RegisterController::class, 'password'])->name('register.password');
Route::post('/register/password', [RegisterController::class, 'passwordPost']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
