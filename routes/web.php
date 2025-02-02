<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::domain('admin.'.env('APP_DOMAIN'))->group(function () {

    // TODO: add routes for managing all tenants

    Route::get('/', function () {
        return view('pages.welcome');
    })->name('index');

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');


    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', function () {
            return view('pages.admin.index');
        })->name('admin.index');

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});

Route::domain(env('APP_DOMAIN'))->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});

require __DIR__.'/auth.php';
