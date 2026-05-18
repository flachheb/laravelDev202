<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'iPhone',
            'price' => 1200,
            'image' => 'iphone.jpg'
        ]);

        Product::create([
            'name' => 'T-shirt',
            'price' => 50,
            'image' => 'shirt.jpg'
        ]);
    }
}