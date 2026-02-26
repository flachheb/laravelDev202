<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ShopController::class, 'index']);             // Accueil
Route::get('/contact', [ShopController::class, 'contact']);   // Contact
Route::get('/cgv', [ShopController::class, 'cgv']);           // CGV

Route::get('/categorie/{slug}', [ProductController::class, 'category']); // Catégorie
Route::get('/produit/{id}', [ProductController::class, 'detail']);      // Détail produit