<?php

use App\Http\Controllers\VisitorController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\LoginController;

Route::resource('/visitors', VisitorController::class)->middleware('auth');
Route::get('/', [WelcomeController::class, 'index']);
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');

