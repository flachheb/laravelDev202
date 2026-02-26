<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Shopcontroller;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/', 'home')->name('home');
Route::get('/cgv', [Shopcontroller::class, 'cgv'])->name('cgv');
Route::get('/contact', [Shopcontroller::class, 'contact'])->name('contact'); 
Route::view('/grand-electromenager', 'grand-electromenager')->name('grand-electromenager');
Route::view('/petit-electromenager', 'petit-electromenager')->name('petit-electromenager');
Route::view('/informatique', 'informatique')->name('informatique');
Route::view('/produit-detail', 'produit-detail')->name('produit-detail');

Route::get('/produit/{id}', function ($id) {
    return view('produit-detail', ['id' => $id]);
})->name('produit-detail');