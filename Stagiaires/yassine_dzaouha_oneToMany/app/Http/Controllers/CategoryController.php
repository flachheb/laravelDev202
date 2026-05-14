<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Show all categories.
     */
    public function index()
    {
        // withCount('products') adds a "products_count" to each category
        $categories = Category::withCount('products')->get();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show form to create a new category.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Save a new category to the database.
     */
    public function store(Request $request)
    {
        // Validate the incoming form data
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Create the category
        Category::create($request->all());

        return redirect()->route('categories.index')
                         ->with('success', 'Category created successfully!');
    }

    /**
     * Show a single category and all its products.
     */
    public function show(Category $category)
    {
        // Eager load the products so we don't run extra queries
        $category->load('products');
        return view('categories.show', compact('category'));
    }

    /**
     * Show form to edit a category.
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the category in the database.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $category->update($request->all());

        return redirect()->route('categories.index')
                         ->with('success', 'Category updated successfully!');
    }

    /**
     * Delete a category (and its products, due to cascade).
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')
                         ->with('success', 'Category deleted!');
    }
}
