<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/login', function() { return 'Login - Coming Soon'; })->name('login');
Route::get('/register', function() { return 'Register - Coming Soon'; })->name('register');
