<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Laptop',
            'price' => 1200,
            'image' => 'laptop.jpg',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'T-Shirt',
            'price' => 25,
            'image' => 'tshirt.jpg',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Laravel Book',
            'price' => 40,
            'image' => 'book.jpg',
            'category_id' => 3,
        ]);
    }
}