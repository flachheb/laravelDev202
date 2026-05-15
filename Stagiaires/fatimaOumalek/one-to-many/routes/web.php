<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return redirect('/categories');
});

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/categories/{id}/products',
    [CategoryController::class, 'products']);
