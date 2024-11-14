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
        // USERS MANAGEMENT
       Route::get('/users', [App\Http\Controllers\UserManagement\UserController::class, 'index'])->name('users.index');
       Route::get('/users/add', [App\Http\Controllers\UserManagement\UserController::class, 'create'])->name('users.add');
       Route::post('/users/add', [App\Http\Controllers\UserManagement\UserController::class, 'store'])->name('users.store');
       Route::get('/users/edit/{id}', [App\Http\Controllers\UserManagement\UserController::class, 'edit'])->name('users.edit');
       Route::post('/users/update/{id}', [App\Http\Controllers\UserManagement\UserController::class, 'update'])->name('users.update');
       Route::get('/users/delete/{id}', [App\Http\Controllers\UserManagement\UserController::class, 'delete'])->name('users.delete');
       Route::post('/users/delete/{id}', [App\Http\Controllers\UserManagement\UserController::class, 'destroy'])->name('users.destroy');

       // ROLES MANAGEMENT
       Route::get('/users/roles', [App\Http\Controllers\UserManagement\UserRolesController::class, 'index'])->name('users.roles');
       Route::get('/users/roles/add/', [App\Http\Controllers\UserManagement\UserRolesController::class, 'create'])->name('users.roles.create');
       Route::post('/users/roles/add/', [App\Http\Controllers\UserManagement\UserRolesController::class, 'store'])->name('users.roles.store');
       Route::get('/users/roles/edit/{id}', [App\Http\Controllers\UserManagement\UserRolesController::class, 'edit'])->name('users.roles.edit');
       Route::post('/users/roles/update/{id}', [App\Http\Controllers\UserManagement\UserRolesController::class, 'update'])->name('users.roles.update');
       Route::get('/users/roles/delete/{id}', [App\Http\Controllers\UserManagement\UserRolesController::class, 'delete'])->name('users.roles.delete');
       Route::post('/users/roles/delete/{id}', [App\Http\Controllers\UserManagement\UserRolesController::class, 'destroy'])->name('users.roles.destroy');

       // PERMISSIONS MANAGEMENT
        Route::get('/users/permissions', [App\Http\Controllers\UserManagement\UserPermissionsController::class, 'index'])->name('users.permissions');
        Route::get('/users/permissions/add/', [App\Http\Controllers\UserManagement\UserPermissionsController::class, 'create'])->name('users.permissions.add');
        Route::post('/users/permissions/add/', [App\Http\Controllers\UserManagement\UserPermissionsController::class, 'store'])->name('users.permissions.store');
        Route::get('/users/permissions/edit/{id}', [App\Http\Controllers\UserManagement\UserPermissionsController::class, 'edit'])->name('users.permissions.edit');
        Route::post('/users/permissions/update/{id}', [App\Http\Controllers\UserManagement\UserPermissionsController::class, 'update'])->name('users.permissions.update');
        Route::get('/users/permissions/delete/{id}', [App\Http\Controllers\UserManagement\UserPermissionsController::class, 'delete'])->name('users.permissions.delete');
        Route::post('/users/permissions/delete/{id}', [App\Http\Controllers\UserManagement\UserPermissionsController::class, 'destroy'])->name('users.permissions.destroy');
    });

    Route::middleware(['role:member|admin|super-admin'])->prefix('admin')->group(function () {
        Route::get('/league', [App\Http\Controllers\LeagueController::class, 'index'])->name('league');
        Route::get('/league/{id}', [App\Http\Controllers\LeagueController::class, 'show'])->name('league.show');
        Route::get('/league/add', [App\Http\Controllers\LeagueController::class, 'create'])->name('league.create');
        Route::post('/league/add', [App\Http\Controllers\LeagueController::class, 'store'])->name('league.store');
        Route::get('/league/edit/{id}', [App\Http\Controllers\LeagueController::class, 'edit'])->name('league.edit');
        Route::post('/league/update/{id}', [App\Http\Controllers\LeagueController::class, 'update'])->name('league.update');
        Route::get('/league/delete/{id}', [App\Http\Controllers\LeagueController::class, 'delete'])->name('league.delete');
        Route::post('/league/destroy/{id}', [App\Http\Controllers\LeagueController::class, 'destroy'])->name('league.destroy');
    });
});
