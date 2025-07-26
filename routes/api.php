<?php

use App\Http\Controllers\ExpanseController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/expanses', [ExpanseController::class, 'index']);
Route::get('/expanses/{expanse}', [ExpanseController::class, 'show']);
Route::post('/expanses', [ExpanseController::class, 'store']);
Route::put('/expanses/{expanse}', [ExpanseController::class, 'update']);
Route::delete('/expanses/{expanse}', [ExpanseController::class, 'delete']);

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
