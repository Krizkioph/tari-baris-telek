<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/sejarah', function () {
    return view('sejarah.index');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);

Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');