<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    private function loadData() {
        require_once app_path('data.php');
        return get_defined_vars();
    }

    public function category($slug) {
        $this->loadData();
        // On transforme le slug (ex: petit-electromenager) en clé (petit_electromenager)
        $categoryKey = str_replace('-', '_', $slug);
        $category = getCategoryById($categoryKey);
        $products = getProductsByCategory($categoryKey);

        return view('category', compact('category', 'products'));
    }

    public function show($id) {
        $this->loadData();
        $product = getProductById($id);
        
        if (!$product) abort(404);

        return view('product-detail', compact('product'));
    }
}