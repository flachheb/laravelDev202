<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Affichage des catégories
     */
    public function category($slug)
    {
        $data = config('data.categories');

        if (!isset($data[$slug])) {
            abort(404);
        }

        return view('category', [
            'slug' => $slug,
            'products' => $data[$slug]
        ]);
    }

    /**
     * Détail d'un produit
     */
    public function show($id)
    {
        $categories = config('data.categories');
        $product = null;

        foreach ($categories as $items) {
            foreach ($items as $item) {
                if ($item['id'] == $id) {
                    $product = $item;
                    break 2;
                }
            }
        }

        if (!$product) {
            abort(404);
        }

        return view('product-detail', compact('product'));
    }
}
