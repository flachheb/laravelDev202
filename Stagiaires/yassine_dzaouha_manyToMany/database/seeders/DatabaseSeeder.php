<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create Categories
        $electronics = Category::create(['name' => 'Electronics',   'description' => 'Gadgets and devices']);
        $deals       = Category::create(['name' => 'Deals',         'description' => 'Special offers']);
        $accessories = Category::create(['name' => 'Accessories',   'description' => 'Add-ons and extras']);
        $computers   = Category::create(['name' => 'Computers',     'description' => 'Laptops and desktops']);

        // Create Products (no category_id column anymore!)
        $iphone  = Product::create(['name' => 'iPhone 15',     'description' => 'Apple smartphone',    'price' => 999.99,  'stock' => 50]);
        $macbook = Product::create(['name' => 'MacBook Pro',   'description' => 'Apple laptop',        'price' => 1999.00, 'stock' => 20]);
        $airpods = Product::create(['name' => 'AirPods Pro',   'description' => 'Wireless earbuds',    'price' => 249.99,  'stock' => 100]);
        $cable   = Product::create(['name' => 'USB-C Cable',   'description' => 'Fast charging cable', 'price' => 19.99,   'stock' => 200]);
        $samsung = Product::create(['name' => 'Samsung S24',   'description' => 'Android smartphone',  'price' => 849.99,  'stock' => 40]);

        // Attach categories to products using the PIVOT TABLE
        // This is the Many-to-Many relationship in action!

        // iPhone belongs to: Electronics AND Deals
        $iphone->categories()->sync([$electronics->id, $deals->id]);

        // MacBook belongs to: Electronics AND Computers
        $macbook->categories()->sync([$electronics->id, $computers->id]);

        // AirPods belongs to: Electronics AND Accessories AND Deals
        $airpods->categories()->sync([$electronics->id, $accessories->id, $deals->id]);

        // USB-C Cable belongs to: Accessories only
        $cable->categories()->sync([$accessories->id]);

        // Samsung belongs to: Electronics AND Deals
        $samsung->categories()->sync([$electronics->id, $deals->id]);
    }
}
