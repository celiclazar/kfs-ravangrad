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

    Route::middleware(['role:super-admin'])->prefix('admin')->group(function () {
       Route::get('/users', [App\Http\Controllers\UserManagement\UserController::class, 'index'])->name('users.index');
       Route::get('/users/create', [App\Http\Controllers\UserManagement\UserController::class, 'create'])->name('users.create');
       Route::post('/users/create', [App\Http\Controllers\UserManagement\UserController::class, 'store'])->name('users.store');
       Route::get('/users/edit/{id}', [App\Http\Controllers\UserManagement\UserController::class, 'edit'])->name('users.edit');
       Route::post('/users/update/{id}', [App\Http\Controllers\UserManagement\UserController::class, 'update'])->name('users.update');

       Route::get('/users/roles', [App\Http\Controllers\UserManagement\UserRolesController::class, 'index'])->name('users.roles');
       Route::get('/users/roles/edit/{id}', [App\Http\Controllers\UserManagement\UserRolesController::class, 'edit'])->name('users.roles.edit');
    });

    Route::middleware(['role:member|admin|super-admin'])->prefix('admin')->group(function () {
        Route::get('/league', [App\Http\Controllers\LeagueController::class, 'index'])->name('league');
        Route::get('/league/create', [App\Http\Controllers\LeagueController::class, 'create'])->name('league.create');
        Route::get('/league/test', [App\Http\Controllers\LeagueController::class, 'test'])->name('league.test');
    });
});
