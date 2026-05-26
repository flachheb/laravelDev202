<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Route::resource() automatically creates all 7 RESTful routes for us:
|
|  GET    /categories            → index()   (list all)
|  GET    /categories/create     → create()  (show create form)
|  POST   /categories            → store()   (save new)
|  GET    /categories/{id}       → show()    (show one)
|  GET    /categories/{id}/edit  → edit()    (show edit form)
|  PUT    /categories/{id}       → update()  (save edits)
|  DELETE /categories/{id}       → destroy() (delete)
|
*/

// Home page — redirect to products
Route::get('/', function () {
    return redirect()->route('products.index');
});

// All routes for Categories (CRUD)
Route::resource('categories', CategoryController::class);

// All routes for Products (CRUD)
Route::resource('products', ProductController::class);
