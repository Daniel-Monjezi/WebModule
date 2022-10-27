<?php

use App\Http\Controllers\VisitorController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


Route::resource('/visitors', VisitorController::class);
Route::get('/', [WelcomeController::class, 'index']);
