<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Load each product's categories (many-to-many eager loading)
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
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|numeric|min:0',
            'stock'       => 'required|integer|min:0',
            'categories'  => 'required|array',        // Must pick at least one
            'categories.*'=> 'exists:categories,id',  // Each must be a valid category
        ]);

        // Step 1: Create the product (without categories)
        $product = Product::create($request->only('name', 'description', 'price', 'stock'));

        /*
        |----------------------------------------------------------------------
        | sync() — This is the key Many-to-Many method!
        |----------------------------------------------------------------------
        | sync() takes an array of category IDs and updates the pivot table.
        |
        | Example: $request->categories = [1, 3]
        | After sync(), the pivot table will have:
        |   product_id | category_id
        |       5      |     1
        |       5      |     3
        |----------------------------------------------------------------------
        */
        $product->categories()->sync($request->categories);

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
        // Get IDs of categories already attached to this product
        $selectedIds = $product->categories->pluck('id')->toArray();
        return view('products.edit', compact('product', 'categories', 'selectedIds'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|numeric|min:0',
            'stock'       => 'required|integer|min:0',
            'categories'  => 'required|array',
            'categories.*'=> 'exists:categories,id',
        ]);

        $product->update($request->only('name', 'description', 'price', 'stock'));

        // sync() also REMOVES categories that were unchecked
        // and ADDS new ones that were checked — all in one call!
        $product->categories()->sync($request->categories);

        return redirect()->route('products.index')
                         ->with('success', 'Product updated!');
    }

    public function destroy(Product $product)
    {
        // detach() removes all rows from the pivot table first
        $product->categories()->detach();
        $product->delete();

        return redirect()->route('products.index')
                         ->with('success', 'Product deleted!');
    }
}
