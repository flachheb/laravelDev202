<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;

class OneToManyController extends Controller
{
    function index(){
        $categories = Categorie::all();
        return view('categories',compact('categories'));
    }

    function products(Categorie $categorie){
        $products = $categorie->products();
        return view('products',compact('products'));
    }
}
