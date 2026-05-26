<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name'        => 'Electronics',
                'description' => 'Phones, laptops, tablets and more.',
            ],
            [
                'name'        => 'Clothing',
                'description' => 'T-shirts, jeans, jackets and accessories.',
            ],
            [
                'name'        => 'Books',
                'description' => 'Fiction, non-fiction, textbooks and more.',
            ],
            [
                'name'        => 'Home & Garden',
                'description' => 'Furniture, tools, and garden supplies.',
            ],
        ];

        foreach ($categories as $data) {
            Category::create($data);
        }

        echo "✅ 4 categories created.\n";
    }
}
