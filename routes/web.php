<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/sejarah', [HomeController::class, 'sejarah'])->name('sejarah');
Route::get('/busana', [HomeController::class, 'busana'])->name('busana');
Route::get('/gerakan', [HomeController::class, 'gerakan'])->name('gerakan');
Route::get('/galeri', [HomeController::class, 'galeri'])->name('galeri');
Route::get('/tentang', [HomeController::class, 'tentang'])->name('tentang');
Route::get('lokasi', [HomeController::class, 'lokasi'])->name('lokasi');

Route::get('/informasi/{id}', [HomeController::class, 'show_informasi'])->name('informasi');
Route::get('/foto/{id}', [HomeController::class, 'show_galeri'])->name('foto');


// Admin
Route::middleware(['auth'])->group(callback: function () {
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::get('/profile/ganti-nama', [AdminController::class, 'ganti_nama'])->name('ganti_nama');
    Route::patch('/profile/update_nama', [AdminController::class, 'update_nama'])->name('update_nama');
    Route::get('/profile/ganti-password', [AdminController::class, 'ganti_password'])->name('ganti_password');
    Route::patch('/profile/update_password', [AdminController::class, 'update_password'])->name('update_password');

    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/view_informasi', [AdminController::class, 'view_informasi'])->name('view_informasi');
    Route::get('/dashboard/tambah_informasi', [AdminController::class, 'tambah_informasi'])->name('tambah_informasi');
    Route::post('/dashboard/store_informasi', [AdminController::class, 'store_informasi'])->name('store_informasi');
    Route::get('/dashboard/edit_informasi/{id}', [AdminController::class, 'edit_informasi'])->name('edit_informasi');
    Route::patch('/dashboard/update_informasi/{id}', [AdminController::class, 'update_informasi'])->name('update_informasi');
    Route::delete('/dashboard/delete_informasi/{id}', [AdminController::class, 'delete_informasi'])->name('delete_informasi');

    Route::get('/dashboard/view_galeri', [AdminController::class, 'view_galeri'])->name('view_galeri');
    Route::get('/dashboard/tambah_galeri', [AdminController::class, 'tambah_galeri'])->name('tambah_galeri');
    Route::post('/dashboard/store_galeri', [AdminController::class, 'store_galeri'])->name('store_galeri');
    Route::get('/dashboard/edit_galeri/{id}', [AdminController::class, 'edit_galeri'])->name('edit_galeri');
    Route::patch('/dashboard/update_galeri/{id}', [AdminController::class, 'update_galeri'])->name('update_galeri');
    Route::delete('/dashboard/delete_galeri/{id}', [AdminController::class, 'delete_galeri'])->name('delete_galeri');

    Route::get('/dashboard/view_gerakan', [AdminController::class, 'view_gerakan'])->name('view_gerakan');
    Route::get('/dashboard/tambah_gerakan', [AdminController::class, 'tambah_gerakan'])->name('tambah_gerakan');
    Route::post('/dashboard/store_gerakan', [AdminController::class, 'store_gerakan'])->name('store_gerakan');
    Route::get('/dashboard/edit_gerakan/{id}', [AdminController::class, 'edit_gerakan'])->name('edit_gerakan');
    Route::patch('/dashboard/update_gerakan/{id}', [AdminController::class, 'update_gerakan'])->name('update_gerakan');
});

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);

Route::delete('/logout', [SessionController::class, 'destroy'])->middleware(['auth']);