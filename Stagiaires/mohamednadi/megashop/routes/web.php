<?php

use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ShopController::class, 'index'])->name('home');
Route::get('/contact', [ShopController::class, 'contact'])->name('contact');
Route::get('/cgv', [ShopController::class, 'cgv'])->name('cgv');


Route::get('/categorie/{slug}', [ProductController::class, 'category'])->name('category');
Route::get('/produit/{id}', [ProductController::class, 'detail'])->name('product.detail');


Route::get('/', function () { return view('pages.index'); });
Route::get('/category/{slug}', [ProductController::class, 'category'])->name('category');
Route::get('/cgv', [ShopController::class, 'cgv'])->name('cgv');
Route::get('/mentions-legales', [ShopController::class, 'legal'])->name('legal');

