<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $electronics = Category::where('name', 'Electronics')->first();
        $clothing    = Category::where('name', 'Clothing')->first();
        $books       = Category::where('name', 'Books')->first();
        $home        = Category::where('name', 'Home & Garden')->first();

        $products = [
            ['name' => 'iPhone 15 Pro',       'price' => 999.99,  'stock' => 50,  'category_id' => $electronics->id, 'description' => 'Latest Apple smartphone.'],
            ['name' => 'Samsung Galaxy S24',   'price' => 849.99,  'stock' => 30,  'category_id' => $electronics->id, 'description' => 'Samsung flagship phone.'],
            ['name' => 'MacBook Air M3',       'price' => 1299.00, 'stock' => 20,  'category_id' => $electronics->id, 'description' => 'Lightweight Apple laptop.'],
            ['name' => 'AirPods Pro',          'price' => 249.00,  'stock' => 100, 'category_id' => $electronics->id, 'description' => 'Wireless earbuds with ANC.'],


            ['name' => 'Classic White T-Shirt','price' => 19.99,   'stock' => 200, 'category_id' => $clothing->id,    'description' => '100% cotton t-shirt.'],
            ['name' => 'Slim Fit Jeans',       'price' => 59.99,   'stock' => 80,  'category_id' => $clothing->id,    'description' => 'Dark blue denim jeans.'],
            ['name' => 'Winter Jacket',        'price' => 129.99,  'stock' => 40,  'category_id' => $clothing->id,    'description' => 'Warm jacket for cold days.'],


            ['name' => 'Clean Code',           'price' => 35.00,   'stock' => 60,  'category_id' => $books->id,       'description' => 'By Robert C. Martin.'],
            ['name' => 'Laravel: Up & Running','price' => 49.99,   'stock' => 45,  'category_id' => $books->id,       'description' => 'A framework for building web apps.'],


            ['name' => 'Coffee Maker',         'price' => 79.99,   'stock' => 35,  'category_id' => $home->id,        'description' => 'Automatic drip coffee maker.'],
            ['name' => 'Garden Hose 50ft',     'price' => 34.99,   'stock' => 25,  'category_id' => $home->id,        'description' => 'Flexible garden hose.'],
        ];

        foreach ($products as $data) {
            Product::create($data);
        }

        echo "✅ " . count($products) . " products created.\n";
    }
}
