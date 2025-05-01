<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GiftController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::get('/create_gift', [GiftController::class, 'store']);
// Advantage of using the --resource command:
Route::apiResource('gift', GiftController::class);