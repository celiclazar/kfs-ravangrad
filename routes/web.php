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
       Route::get('/users/add', [App\Http\Controllers\UserManagement\UserController::class, 'create'])->name('users.create');
       Route::post('/users/add', [App\Http\Controllers\UserManagement\UserController::class, 'store'])->name('users.store');
       Route::get('/users/edit/{id}', [App\Http\Controllers\UserManagement\UserController::class, 'edit'])->name('users.edit');
       Route::post('/users/update/{id}', [App\Http\Controllers\UserManagement\UserController::class, 'update'])->name('users.update');
       Route::post('/users/delete/{id}', [App\Http\Controllers\UserManagement\UserController::class, 'delete'])->name('users.update');

       // ROLES MANAGEMENT
       Route::get('/users/roles', [App\Http\Controllers\UserManagement\UserRolesController::class, 'index'])->name('users.roles');
       Route::get('/users/roles/add/', [App\Http\Controllers\UserManagement\UserRolesController::class, 'add'])->name('users.roles.add');
       Route::post('/users/roles/add/', [App\Http\Controllers\UserManagement\UserRolesController::class, 'store'])->name('users.roles.store');
       Route::get('/users/roles/edit/{id}', [App\Http\Controllers\UserManagement\UserRolesController::class, 'edit'])->name('users.roles.edit');
       Route::get('/users/roles/update/{id}', [App\Http\Controllers\UserManagement\UserRolesController::class, 'update'])->name('users.roles.update');
       Route::get('/users/roles/delete/{id}', [App\Http\Controllers\UserManagement\UserRolesController::class, 'delete'])->name('users.roles.delete');

       // PERMISSIONS MANAGEMENT
        Route::get('/users/permissions', [App\Http\Controllers\UserManagement\UserPermissionsController::class, 'index'])->name('users.permissions');
        Route::get('/users/permissions/add/', [App\Http\Controllers\UserManagement\UserPermissionsController::class, 'add'])->name('users.permissions.add');
        Route::post('/users/permissions/add/', [App\Http\Controllers\UserManagement\UserPermissionsController::class, 'store'])->name('users.permissions.store');
        Route::get('/users/permissions/edit/{id}', [App\Http\Controllers\UserManagement\UserPermissionsController::class, 'edit'])->name('users.permissions.edit');
        Route::post('/users/permissions/update/{id}', [App\Http\Controllers\UserManagement\UserPermissionsController::class, 'update'])->name('users.permissions.update');
        Route::post('/users/permissions/delete/{id}', [App\Http\Controllers\UserManagement\UserPermissionsController::class, 'delete'])->name('users.permissions.delete');
    });

    Route::middleware(['role:member|admin|super-admin'])->prefix('admin')->group(function () {
        Route::get('/league', [App\Http\Controllers\LeagueController::class, 'index'])->name('league');
        Route::get('/league/create', [App\Http\Controllers\LeagueController::class, 'create'])->name('league.create');
        Route::get('/league/test', [App\Http\Controllers\LeagueController::class, 'test'])->name('league.test');
    });
});
