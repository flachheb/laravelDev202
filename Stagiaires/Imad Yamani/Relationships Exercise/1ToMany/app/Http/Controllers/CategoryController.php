<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * INDEX — Show all categories
     * URL: GET /categories
     */
    public function index()
    {
        // withCount('products') adds a "products_count" column so we
        // can display how many products each category has.
        $categories = Category::withCount('products')->get();

        return view('categories.index', compact('categories'));
    }

    /**
     * CREATE — Show the form to create a new category
     * URL: GET /categories/create
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * STORE — Save the new category to the database
     * URL: POST /categories
     */
    public function store(Request $request)
    {
        // Validate the form input
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Create and save the category
        Category::create($request->all());

        // Redirect back to the list with a success message
        return redirect()->route('categories.index')
                         ->with('success', 'Category created successfully!');
    }

    /**
     * SHOW — Show a single category and all its products
     * URL: GET /categories/{category}
     */
    public function show(Category $category)
    {
        // Load the category along with its products (eager loading)
        $category->load('products');

        return view('categories.show', compact('category'));
    }

    /**
     * EDIT — Show the form to edit an existing category
     * URL: GET /categories/{category}/edit
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * UPDATE — Save the edited category to the database
     * URL: PUT /categories/{category}
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
     * DESTROY — Delete a category
     * URL: DELETE /categories/{category}
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')
                         ->with('success', 'Category deleted successfully!');
    }
}
