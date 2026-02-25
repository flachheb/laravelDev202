<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function product($id){
        require base_path('Data/data.php');
        $product = getProductById($id);
        return view('product', ['id'=>$product['id']]);
    }
    function categorie($id){
        require base_path('Data/data.php');
        $categorie = getCategoryById($id);
        $viewName = $categorie['id'];
        return view($viewName, ["categorie"=>$categorie]);
    }
}
