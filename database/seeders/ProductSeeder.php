<?php

// database/seeders/ProductSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // On récupère toutes les catégories dans une collection
        $categories = Category::all();

        // On crée les produits en utilisant l'index du tableau ($categories[0], [1]...)
        Product::create([
            'name' => 'PC Portable HP',
            'price' => 7500.00,
            'category_id' => $categories[0]->id
        ]);

        Product::create([
            'name' => 'Smartphone Samsung',
            'price' => 4200.50,
            'category_id' => $categories[0]->id
        ]);

        Product::create([
            'name' => 'Veste en cuir',
            'price' => 850.00,
            'category_id' => $categories[1]->id
        ]);
    }
}
