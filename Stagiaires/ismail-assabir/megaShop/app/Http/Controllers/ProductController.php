<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function product($id){
        require base_path('data/data.php');
        $product = getProductById($id);
        return view('product', compact("id"));
    }
    function categorie($id){
        require base_path('data/data.php');
        $categorie = getCategoryById($id);
        if (!$categorie) {
            abort(404, "La catégorie '$id' est introuvable.");
        }
        $viewName = $categorie['id'];
        return view($viewName, compact('categorie'));
    }
}
