<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database with sample data.
     *
     * This shows the One-to-Many relationship clearly:
     * - Each Category has MANY Products
     * - Each Product belongs to ONE Category
     */
    public function run(): void
    {
        // -----------------------------------------------
        // Create Categories
        // -----------------------------------------------
        $electronics = Category::create([
            'name'        => 'Electronics',
            'description' => 'Gadgets, phones, laptops and more',
        ]);

        $clothing = Category::create([
            'name'        => 'Clothing',
            'description' => 'T-shirts, jeans, jackets and accessories',
        ]);

        $books = Category::create([
            'name'        => 'Books',
            'description' => 'Fiction, non-fiction, textbooks and more',
        ]);

        // -----------------------------------------------
        // Create Products — each linked to a category
        // via category_id (the foreign key)
        // -----------------------------------------------

        // Electronics products
        Product::create(['name' => 'iPhone 15',        'description' => 'Latest Apple smartphone',      'price' => 999.99, 'stock' => 50,  'category_id' => $electronics->id]);
        Product::create(['name' => 'Samsung Galaxy S24','description' => 'Flagship Android phone',      'price' => 849.99, 'stock' => 40,  'category_id' => $electronics->id]);
        Product::create(['name' => 'MacBook Pro',       'description' => '14-inch laptop with M3 chip', 'price' => 1999.00,'stock' => 20,  'category_id' => $electronics->id]);
        Product::create(['name' => 'AirPods Pro',       'description' => 'Noise-cancelling earbuds',    'price' => 249.99, 'stock' => 100, 'category_id' => $electronics->id]);

        // Clothing products
        Product::create(['name' => 'Blue Jeans',        'description' => 'Classic slim-fit denim',       'price' => 59.99,  'stock' => 200, 'category_id' => $clothing->id]);
        Product::create(['name' => 'White T-Shirt',     'description' => 'Cotton everyday t-shirt',      'price' => 19.99,  'stock' => 300, 'category_id' => $clothing->id]);
        Product::create(['name' => 'Leather Jacket',    'description' => 'Premium leather jacket',       'price' => 199.99, 'stock' => 30,  'category_id' => $clothing->id]);

        // Books products
        Product::create(['name' => 'Laravel: Up & Running', 'description' => 'A beginner guide to Laravel', 'price' => 39.99, 'stock' => 80, 'category_id' => $books->id]);
        Product::create(['name' => 'Clean Code',             'description' => 'Write better code',           'price' => 34.99, 'stock' => 60, 'category_id' => $books->id]);
        Product::create(['name' => 'The Pragmatic Programmer','description' => 'Developer career guide',      'price' => 44.99, 'stock' => 55, 'category_id' => $books->id]);
    }
}
