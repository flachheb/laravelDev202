<?php

use App\Http\Controllers\LoginControler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

// Route::get('/', function () {
//     return view('layouts.master');
// });

Route::get("/", [ShopController::class,'accueil'])->name('accueil');

Route::get("/login",[LoginControler::class,'show'])->name('login.show');

Route::post("/login",[LoginControler::class,'login'])->name('login');

Route::get("/logout",[LoginControler::class,'logout'])->name('login.logout');

Route::get("/contact",[ShopController::class,'contact'])->name('contact');

Route::get("/cgv",[ShopController::class,'cgv'] )->name('cgv');

Route::get("/categories/{cat}",[ProductController::class,'categories'])->name('categories');

Route::get("/produitDetail/{cat}/{id}",[ProductController::class,'produit'])->name('productDetail');

Route::get("/profiles",[ProfileController::class,'profiles'])->name('profile.index');

Route::get('profiles/{profile}',[ProfileController::class,'show'])->where('profile','\d+')->name('profiles.show');

Route::get('profiles/create',[ProfileController::class,'create'])->name('create');

Route::post('profiles/store',[ProfileController::class,'store'])->name('store');

Route::delete('profiles/{profile}',[ProfileController::class,'destroy'])
->name('profiles.destroy');

Route::get('profiles/{profile}/edit',[ProfileController::class,'edit'])
->name('profiles.edit');

Route::post('profiles/{profile}',[ProfileController::class,'update'])
->name('profiles.update');