<?php

use App\Http\Controllers\Api\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('api/v1')->group(function () {
    Route::apiResource('products', ProductController::class);

    // Additional product routes
    Route::patch('products/{product}/toggle-status', [ProductController::class, 'toggleStatus']);
    Route::patch('products/{product}/update-stock', [ProductController::class, 'updateStock']);
});
