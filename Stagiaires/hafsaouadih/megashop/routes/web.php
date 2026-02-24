<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;

// Pages principales
Route::get('/', [ShopController::class, 'index']);
Route::get('/contact', [ShopController::class, 'contact']);
Route::get('/cgv', [ShopController::class, 'cgv']);

// Catégories & produits
Route::get('/categories/{slug}', [ProductController::class, 'category']);
Route::get('/produit/{id}', [ProductController::class, 'show']);
