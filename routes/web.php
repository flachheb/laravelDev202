<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;

// ShopController
Route::get('/', [ShopController::class, 'index'])->name('home');
Route::get('/contact', [ShopController::class, 'contact'])->name('contact');
Route::get('/cgv', [ShopController::class, 'cgv'])->name('cgv');

// ProductController
Route::get('/categorie/{slug}', [ProductController::class, 'category'])->name('category');
Route::get('/produit/{id}', [ProductController::class, 'show'])->name('product.detail');