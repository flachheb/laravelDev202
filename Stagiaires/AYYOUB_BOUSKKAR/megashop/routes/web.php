<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); 
});

Route::get('/informatique', function () {
    return view('informatique');
});

Route::get('/petit-electromenager', function () {
    return view('petit-electromenager');
});

Route::get('/grand-electromenager', function () {
    return view('.grand-electromenager');
});

Route::get('/cgv', function () {
    return view('cgv');
});

Route::get('/contact', function () {
    return view('contact');
});