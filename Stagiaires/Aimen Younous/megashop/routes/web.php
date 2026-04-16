<?php

use App\Http\Controllers\LoginControler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicationsController;

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


// basic
// Route::get("/profiles",[ProfileController::class,'profiles'])->name('profile.index');
// Route::get('profiles/{profile}',[ProfileController::class,'show'])->where('profile','\d+')->name('profiles.show');
// Route::get('profiles/create',[ProfileController::class,'create'])->name('profiles.create');
// Route::post('profiles/store',[ProfileController::class,'store'])->name('profiles.store');
// Route::delete('profiles/{profile}',[ProfileController::class,'destroy'])->name('profiles.destroy');
// Route::get('profiles/{profile}/edit',[ProfileController::class,'edit'])->name('profiles.edit');
// Route::put('profiles/{profile}',[ProfileController::class,'update'])->name('profiles.update');

//pro
// Route::name('profiles.')->prefix('profiles')->group(function(){
//     Route::controller(ProfileController::class)->group(function(){
//         Route::get("",'profiles')->name('index');
//         Route::get('/{profile}','show')->where('profile','\d+')->name('show');
//         Route::get('/create','create')->name('create');
//         Route::post('/store','store')->name('store');
//         Route::delete('/{profile}','destroy')->name('destroy');
//         Route::get('/{profile}/edit','edit')->name('edit');
//         Route::put('/{profile}','update')->name('update');
//     });
// });

//ultra
Route::resource('profiles',ProfileController::class);

Route::resource('publications',PublicationsController::class);