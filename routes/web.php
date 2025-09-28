<?php

use App\Http\Controllers\GetUsersController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [GetUsersController::class, 'GetUsers'])
    ->middleware('auth')
    ->name('dashboard');

Route::get('/registro', [GetUsersController::class, 'registro'])
    ->middleware('auth')
    ->name('registro');

Route::post('/dashboard/register', [GetUsersController::class, 'registro_store'])
    ->middleware('auth')
    ->name('dashboard.register');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
