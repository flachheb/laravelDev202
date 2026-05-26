<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * INDEX — Show all products
     * URL: GET /products
     */
    public function index()
    {
        // with('category') uses eager loading to also fetch each product's category
        // This avoids the "N+1 query problem"
        $products = Product::with('category')->get();

        return view('products.index', compact('products'));
    }

    /**
     * CREATE — Show the form to add a new product
     * URL: GET /products/create
     */
    public function create()
    {
        // We need to pass all categories so the user can pick one
        $categories = Category::all();

        return view('products.create', compact('categories'));
    }

    /**
     * STORE — Save the new product to the database
     * URL: POST /products
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|numeric|min:0',
            'stock'       => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id', // Must be a valid category
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')
                         ->with('success', 'Product created successfully!');
    }

    /**
     * SHOW — Show a single product's details
     * URL: GET /products/{product}
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * EDIT — Show the form to edit a product
     * URL: GET /products/{product}/edit
     */
    public function edit(Product $product)
    {
        $categories = Category::all();

        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * UPDATE — Save the edited product
     * URL: PUT /products/{product}
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
     * DESTROY — Delete a product
     * URL: DELETE /products/{product}
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
                         ->with('success', 'Product deleted successfully!');
    }
}
