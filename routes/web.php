<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/productlist', [HomeController::class, 'productlist']);
Route::get('/products/{id}', [HomeController::class, 'productdetail'])->name('products.productdetail');
