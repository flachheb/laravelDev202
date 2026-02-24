<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;


Route::get('/', [ShopController::class, 'index']);

Route::get('/contact', [ShopController::class, 'contact']);


Route::get('/cgv', [ShopController::class, 'cgv']);


Route::get('/categorie', [ProductController::class, 'categorie']);

Route::get('/produit', [ProductController::class, 'produitDetail']);
