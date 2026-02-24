<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        return view('produit-detail', compact('id'));
    }
    public function category($slug)
{
    $products = config('data.categories')[$slug] ?? [];
    return view('category', compact('products', 'slug'));
}
}
