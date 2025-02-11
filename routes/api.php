<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store']);

use App\Http\Controllers\CartController;

Route::post('/cart/add', [CartController::class, 'add']);
Route::get('/cart', [CartController::class, 'view']);
Route::delete('/cart/remove/{id}', [CartController::class, 'remove']);

use App\Http\Controllers\OrderController;

Route::post('/orders', [OrderController::class, 'placeOrder']);
Route::get('/orders', [OrderController::class, 'viewOrders']);
