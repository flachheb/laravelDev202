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


Route::name('profiles.')->prefix('profiles')->group(function(){
    Route::controller(ProfileController::class)->group(function(){
        Route::get("",'profiles')->name('index');
        Route::get('/{profile}','show')->where('profile','\d+')->name('show');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::delete('/{profile}','destroy')->name('destroy');
        Route::get('/{profile}/edit','edit')->name('edit');
        Route::put('/{profile}','update')->name('update');
    });
});