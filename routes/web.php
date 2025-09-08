<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FlowerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAuthController;

use App\Http\Middleware\AdminAuth;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/flower', [FlowerController::class, 'show'])->name('flower');

Route::view('/login', 'login')->name('login');
Route::post('/try-login', [AdminAuthController::class, 'login'])->name('try-login');

Route::middleware([AdminAuth::class])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::view('/edit', 'edit')->name('edit');
    Route::post('/save-flower', [FlowerController::class, 'store'])->name('save-flower');
    Route::get('/logout', [AdminAuthController::class, 'logout'])->name('logout');
});
