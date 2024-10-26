<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Product::factory(10)->create();

        $products = [
            ['name' => 'Bakso', 'price' => 15000, 'stock' => 12, 'category' => 'food'],
            ['name' => 'Nasi Goreng', 'price' => 10000, 'stock' => 10, 'category' => 'food'],
            ['name' => 'Americano', 'price' => 20000, 'stock' => 20, 'category' => 'drink'],
            ['name' => 'Cappucino', 'price' => 17000, 'stock' => 15, 'category' => 'drink'],
            ['name' => 'Nugget', 'price' => 12000, 'stock' => 12, 'category' => 'snack'],
            ['name' => 'Potato', 'price' => 15000, 'stock' => 10, 'category' => 'snack'],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
