<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function categorie($type = 'informatique')
    {
        
        return view('categorie', ['categorie' => $type]);
    }

    
    public function produitDetail($id = 1)
    {
        
        return view('produit-detail', ['produit_id' => $id]);
    }
}