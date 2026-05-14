<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // with('categories') loads all categories for each product
        $products = Product::with('categories')->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'         => 'required|string|max:255',
            'description'  => 'nullable|string',
            'price'        => 'required|numeric|min:0',
            'stock'        => 'required|integer|min:0',
            'category_ids' => 'required|array',        // must select at least one
            'category_ids.*' => 'exists:categories,id', // each id must exist
        ]);

        // Step 1: Create the product (no category_id column needed)
        $product = Product::create($request->only('name', 'description', 'price', 'stock'));

        // Step 2: Attach the selected categories to this product
        // sync() writes the rows into the pivot table (category_product)
        // e.g. category_ids = [1, 3] → inserts two rows in pivot table
        $product->categories()->sync($request->category_ids);

        return redirect()->route('products.index')
                         ->with('success', 'Product created!');
    }

    public function show(Product $product)
    {
        $product->load('categories');
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();

        // Get the IDs of the categories already attached to this product
        // Used to pre-check the checkboxes in the form
        $selectedCategories = $product->categories->pluck('id')->toArray();

        return view('products.edit', compact('product', 'categories', 'selectedCategories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name'           => 'required|string|max:255',
            'description'    => 'nullable|string',
            'price'          => 'required|numeric|min:0',
            'stock'          => 'required|integer|min:0',
            'category_ids'   => 'required|array',
            'category_ids.*' => 'exists:categories,id',
        ]);

        $product->update($request->only('name', 'description', 'price', 'stock'));

        // sync() updates the pivot table:
        // - adds new category links
        // - removes old category links that were unchecked
        $product->categories()->sync($request->category_ids);

        return redirect()->route('products.index')
                         ->with('success', 'Product updated!');
    }

    public function destroy(Product $product)
    {
        // sync([]) removes all rows from pivot table for this product
        $product->categories()->sync([]);
        $product->delete();

        return redirect()->route('products.index')
                         ->with('success', 'Product deleted!');
    }
}
