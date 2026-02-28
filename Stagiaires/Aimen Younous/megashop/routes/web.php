<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;

// Route::get('/', function () {
//     return view('layouts.master');
// });

Route::get("/", [ShopController::class,'accueil'])->name('accueil');

Route::get("/contact",[ShopController::class,'contact'])->name('contact');


Route::get("/cgv",[ShopController::class,'cgv'] )->name('cgv');

Route::get("/categories/{cat}",[ProductController::class,'categories'])->name('categories');

Route::get("/produitDetail/{cat}/{id}",[ProductController::class,'produit'])->name('productDetail');

