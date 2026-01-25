<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionItemController;

Route::get('/', function () {
    return redirect('/ingredients');
});
Route::get('/ingredients', [ProductController::class, 'ingredients'])->name('ingredients');
Route::get('/drinks', [ProductController::class, 'drinks'])->name('drinks');