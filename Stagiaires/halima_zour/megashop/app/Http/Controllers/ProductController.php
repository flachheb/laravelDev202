<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function category($slug)
    {
        // Exemple simple : tableau de produits par catégorie
        $products = [
            'informatique' => [
                ['id'=>1, 'name'=>'Laptop X', 'price'=>1200],
                ['id'=>2, 'name'=>'Tablette Y', 'price'=>500]
            ],
            'petit-electromenager' => [
                ['id'=>3, 'name'=>'Cafetière A', 'price'=>80],
                ['id'=>4, 'name'=>'Mixeur B', 'price'=>60]
            ],
            'grand-electromenager' => [
                ['id'=>5, 'name'=>'Réfrigérateur C', 'price'=>900],
                ['id'=>6, 'name'=>'Lave-linge D', 'price'=>700]
            ],
        ];

        $categoryProducts = $products[$slug] ?? [];

        return view('category', compact('categoryProducts', 'slug'));
    }

    public function show($id)
    {
        // Produits simplifiés
        $products = [
            1 => ['name'=>'Laptop X', 'price'=>1200],
            2 => ['name'=>'Tablette Y', 'price'=>500],
            3 => ['name'=>'Cafetière A', 'price'=>80],
            4 => ['name'=>'Mixeur B', 'price'=>60],
            5 => ['name'=>'Réfrigérateur C', 'price'=>900],
            6 => ['name'=>'Lave-linge D', 'price'=>700],
        ];

        $product = $products[$id] ?? null;

        if (!$product) {
            return "Produit non trouvé !";
        }

        return view('product-detail', compact('product'));
    }
}
