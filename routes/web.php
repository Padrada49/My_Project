<?php

use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsersController;
use App\Livewire\Products;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    return redirect()->route('login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('roles', RolesController::class);
    Route::resource('users', UsersController::class);
    Route::get('/products', Products::class);
});

