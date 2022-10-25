<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\CalculateIpiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/teste', [CalculateIpiController::class]);
Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'save']);