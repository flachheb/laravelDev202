<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;


Route::get('/', [ShopController::class, 'index']);
Route::get('/contact', [ShopController::class, 'contact']);
Route::get('/cgv', [ShopController::class, 'cgv']);
