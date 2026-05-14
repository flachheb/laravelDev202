<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => 'Electronics',
            'description' => 'Electronic products',
        ]);

        Category::create([
            'name' => 'Clothes',
            'description' => 'Fashion products',
        ]);

        Category::create([
            'name' => 'Books',
            'description' => 'Books and magazines',
        ]);
    }
}