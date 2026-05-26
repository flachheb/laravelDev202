<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Electronics',   'description' => 'Phones, laptops, gadgets'],
            ['name' => 'Computers',     'description' => 'Desktops, laptops, accessories'],
            ['name' => 'Smartphones',   'description' => 'Mobile phones and accessories'],
            ['name' => 'Best Sellers',  'description' => 'Top selling products'],
            ['name' => 'On Sale',       'description' => 'Discounted items'],
        ];
        foreach ($categories as $data) {
            Category::create($data);
        }
    }
}
