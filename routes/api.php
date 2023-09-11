<?php

use App\Http\Controllers\Products\GetProductsController;
use App\Http\Controllers\Products\StoreProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/products')->group(function () {
    Route::get('/', GetProductsController::class);
    Route::post('/', StoreProductController::class);
});
