<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.homepage');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Routes for authenticated users
Route::middleware(['auth'])->group(function () {

    // Any authenticated user can access this route
    Route::get('/dashboard', function () {
        return view('pages.users.dashboard');
    })->name('home');

    Route::middleware(['role:member|admin|super-admin'])->prefix('admin')->group(function () {
        Route::get('/league', [App\Http\Controllers\LeagueController::class, 'index'])->name('league');
        Route::get('/league/add-round', [App\Http\Controllers\LeagueController::class, 'addRound'])->name('league.add-round');
    });
});
