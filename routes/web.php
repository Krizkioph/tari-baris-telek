<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/sejarah', [HomeController::class, 'sejarah'])->name('sejarah');
Route::get('/busana', [HomeController::class, 'busana'])->name('busana');


Route::middleware(['auth'])->group(callback: function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/view_informasi', [AdminController::class, 'view_informasi'])->name('view_informasi');
    Route::get('/dashboard/create_informasi', [AdminController::class, 'create_informasi'])->name('create_informasi');
    Route::get('/dashboard/view_galeri', [AdminController::class, 'view_galeri'])->name('view_galeri');
    Route::get('/dashboard/create_galeri', [AdminController::class, 'create_galeri'])->name('create_galeri');
});

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);

Route::delete('/logout', [SessionController::class, 'destroy'])->middleware(['auth']);