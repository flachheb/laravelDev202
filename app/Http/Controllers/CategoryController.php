<?php


namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Afficher toutes les catégories
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    // Afficher les produits d'une catégorie spécifique
    public function show(Category $category)
    {
        // On charge les produits liés à cette catégorie
        $products = $category->products; 
        return view('categories.show', compact('category', 'products'));
    }
}