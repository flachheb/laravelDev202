<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => 'Phones',
            'description' => 'smart phones'
        ]);

        Category::create([
            'name' => 'Clothes',
            'description' => 'fashion'
        ]);
    }
}