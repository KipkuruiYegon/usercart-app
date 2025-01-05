<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\CartController;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);
Route::get('/', [TemplateController::class, 'index']);
Route::post('cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');



Route::prefix('cart')->group(function () {
    Route::post('/add/{productId}', [CartController::class, 'addToCart']);
    Route::delete('/remove/{productId}', [CartController::class, 'removeFromCart']);
    Route::get('/view', [CartController::class, 'viewCart']);
    Route::delete('/clear', [CartController::class, 'clearCart']);
});
