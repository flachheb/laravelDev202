<?php

namespace Database\Seeders;

use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = Categorie::create([
            'name' => 'Informatique',
            'description'=>'Piciyat tilifonat tabletat lmla7'
        ]);

        Product::create([
            'name' => 'Ordinateur Portable Pro',
            'price' => 1299.99,
            'image'=>'iphone4.png',
            'categorie_id' => $category->id,
        ]);
        Product::create([
            'name' => 'Tablete  Pro',
            'price' => 199.99,
            'image'=>'iphone4.png',
            'categorie_id' => $category->id,
        ]);
        Product::create([
            'name' => 'Huawei Phone Pro',
            'price' => 299.99,
            'image'=>'iphone4.png',
            'categorie_id' => $category->id,
        ]);

        $category = Categorie::create([
            'name' => 'Cars',
            'description'=>'Tonobilat lmla7'
        ]);

        Product::create([
            'name' => 'Toyota 1999',
            'price' => 12992.99,
            'image'=>'toyota.png',
            'categorie_id' => $category->id,
        ]);
        Product::create([
            'name' => 'Mercedes 14  Pro Max',
            'price' => 19299.99,
            'image'=>'mercedes.png',
            'categorie_id' => $category->id,
        ]);
        Product::create([
            'name' => 'Dacia',
            'price' => 299.99,
            'image'=>'dacia.png',
            'categorie_id' => $category->id,
        ]);
    }
}
