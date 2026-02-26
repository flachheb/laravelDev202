<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
Route::get('/', [ShopController::class, "index"]);
Route::get('/contact', [ShopController::class, "contact"]);
Route::get('/cgv', [ShopController::class, "cgv"]);
Route::get('/product/{id}', [ProductController::class, "product"]);
Route::get('/categorie/{id}', [ProductController::class, "categorie"]);
