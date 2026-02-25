<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ShopController::class, "home"]);
Route::get('/contact', [ShopController::class, "contact"]);
Route::get('/cgv', [ShopController::class, "cgv"]);
Route::get('/category/{slug}', [ProductController::class, "category"]);
Route::get('/product/{id}', [ProductController::class, "product"]);
