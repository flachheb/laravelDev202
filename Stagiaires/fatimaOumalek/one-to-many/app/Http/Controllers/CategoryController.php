<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('products')->get();

        return view('categories.index', compact('categories'));
    }

    public function products( int $id)
    {
        $category = Category::with('products')->findOrFail($id);

        return view('categories.products', compact('category'));
    }
}