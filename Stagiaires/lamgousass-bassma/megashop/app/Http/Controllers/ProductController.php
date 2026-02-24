<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Page catégorie (informatique, petit-electromenager, grand-electromenager)
    public function categorie($type = 'informatique')
    {
        // $type = nom de catégorie
        return view('categorie', ['categorie' => $type]);
    }

    
    public function produitDetail($id = 1)
    {
        //  chercher produit par $id
        return view('produit-detail', ['produit_id' => $id]);
    }
}
