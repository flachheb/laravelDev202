<?php

// database/seeders/CategorySeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = ['Électronique', 'Vêtements', 'Maison', 'Sport'];

        foreach ($categories as $cat) {
            Category::create(['name' => $cat]);
        }
    }
}