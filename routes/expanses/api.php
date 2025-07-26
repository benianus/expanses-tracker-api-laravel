<?php

use App\Http\Controllers\ExpanseController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Expanses
Route::get('/expanses', [ExpanseController::class, 'index']);

Route::get('/expanses/{expanse}', [ExpanseController::class, 'show']);

Route::post('/expanses', [ExpanseController::class, 'store'])
    ->middleware('auth:sanctum');

Route::put('/expanses/{expanse}', [ExpanseController::class, 'update'])
    ->middleware('auth:sanctum');

Route::delete('/expanses/{expanse}', [ExpanseController::class, 'destroy'])
    ->middleware('auth:sanctum');

