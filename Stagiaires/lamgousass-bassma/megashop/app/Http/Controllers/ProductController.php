<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Page catégorie (informatique, petit-electromenager, grand-electromenager)
   public function categorie($slug)
{
    return view('categorie', compact('slug'));
}
    }

    
    public function produitDetail($id = 1)
    {
        //  chercher produit par $id
        return view('produit-detail', ['produit_id' => $id]);
    }
}
