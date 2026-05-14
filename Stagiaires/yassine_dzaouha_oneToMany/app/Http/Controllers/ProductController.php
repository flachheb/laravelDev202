<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Show all products (with their category name).
     */
    public function index()
    {
        // with('category') eager-loads the related category for each product
        $products = Product::with('category')->get();
        return view('products.index', compact('products'));
    }

    /**
     * Show form to create a new product.
     */
    public function create()
    {
        $categories = Category::all(); // Needed for the dropdown
        return view('products.create', compact('categories'));
    }

    /**
     * Save a new product.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|numeric|min:0',
            'stock'       => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')
                         ->with('success', 'Product created successfully!');
    }

    /**
     * Show details for a single product.
     */
    public function show(Product $product)
    {
        $product->load('category');
        return view('products.show', compact('product'));
    }

    /**
     * Show form to edit a product.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the product.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|numeric|min:0',
            'stock'       => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
                         ->with('success', 'Product updated successfully!');
    }

    /**
     * Delete a product.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
                         ->with('success', 'Product deleted!');
    }
}
