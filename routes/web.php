<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

// Route::get('/', function () {
//     return view('welcome');
// });
/*Route::get('/patient',[PatientController::class,'index'])->name('patient.index');
Route::get('/patient/{id}',[PatientController::class,'show'])->name('patient.show');*/
// Route::get('/{n?}',function($n=1){
//     return 'bonjour'.$n.'rebonjour';
// });
// routes/web.php


Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');