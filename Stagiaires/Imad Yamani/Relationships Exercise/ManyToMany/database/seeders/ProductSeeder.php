<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $electronics  = Category::where('name', 'Electronics')->first();
        $computers    = Category::where('name', 'Computers')->first();
        $smartphones  = Category::where('name', 'Smartphones')->first();
        $bestSellers  = Category::where('name', 'Best Sellers')->first();
        $onSale       = Category::where('name', 'On Sale')->first();


        $iphone = Product::create(['name' => 'iPhone 15 Pro', 'price' => 999.99, 'stock' => 50, 'description' => 'Latest Apple smartphone.']);
        $iphone->categories()->sync([$electronics->id, $smartphones->id, $bestSellers->id]);


        $laptop = Product::create(['name' => 'MacBook Air M3', 'price' => 1299.00, 'stock' => 20, 'description' => 'Lightweight Apple laptop.']);
        $laptop->categories()->sync([$electronics->id, $computers->id]);


        $samsung = Product::create(['name' => 'Samsung Galaxy S24', 'price' => 699.99, 'stock' => 40, 'description' => 'Samsung flagship.']);
        $samsung->categories()->sync([$electronics->id, $smartphones->id, $onSale->id]);


        $airpods = Product::create(['name' => 'AirPods Pro', 'price' => 249.00, 'stock' => 100, 'description' => 'Wireless earbuds.']);
        $airpods->categories()->sync([$electronics->id, $bestSellers->id]);
    }
}
