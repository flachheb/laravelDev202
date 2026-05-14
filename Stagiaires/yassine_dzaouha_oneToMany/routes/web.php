<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home page — redirect to categories
Route::get('/', function () {
    return redirect()->route('categories.index');
});

// Resource routes for Categories (generates all 7 CRUD routes automatically)
// GET    /categories          → index   (list all)
// GET    /categories/create   → create  (show form)
// POST   /categories          → store   (save new)
// GET    /categories/{id}     → show    (show one)
// GET    /categories/{id}/edit→ edit    (show edit form)
// PUT    /categories/{id}     → update  (save changes)
// DELETE /categories/{id}     → destroy (delete)
Route::resource('categories', CategoryController::class);

// Resource routes for Products (same 7 routes)
Route::resource('products', ProductController::class);
