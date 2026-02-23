<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('layouts/app');
});

Route::get("/accueil", [ShopController::class,'accueil']);

Route::get("/contact",[ShopController::class,'contact']);


Route::get("/cgv",[ShopController::class,'cgv'] );

Route::get("/categories/{cat}",[ProductController::class,'categories']);

Route::get("/produitDetail/{cat}/{id}",[ProductController::class,'produit']);

