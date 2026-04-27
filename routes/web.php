<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'login']);
Route::post('/dashboard', [PageController::class, 'dashboard']);
Route::get('/dashboard/{username}', [PageController::class, 'showDashboard']);
Route::get('/profile/{username}', [PageController::class, 'profile']);
Route::get('/pengelolaan/{username}', [PageController::class, 'pengelolaan']);
