<?php

namespace Database\Seeders;

use App\Models\Category;
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
            ['name' => 'Bakso', 'price' => 15000, 'stock' => 12, 'category' => 'Makanan'],
            ['name' => 'Nasi Goreng', 'price' => 10000, 'stock' => 10, 'category' => 'Makanan'],
            ['name' => 'Americano', 'price' => 20000, 'stock' => 20, 'category' => 'Minuman'],
            ['name' => 'Cappucino', 'price' => 17000, 'stock' => 15, 'category' => 'Minuman'],
            ['name' => 'Nugget', 'price' => 12000, 'stock' => 12, 'category' => 'Snack'],
            ['name' => 'Potato', 'price' => 15000, 'stock' => 10, 'category' => 'Snack'],
        ];

        // Ambil kategori unik dari produk
        $categories = array_unique(array_column($products, 'category'));

        // Buat kategori jika belum ada
        foreach ($categories as $categoryName) {
            Category::firstOrCreate(['name' => $categoryName]);
        }

        // Buat produk
        foreach ($products as $product) {
            // Ambil id kategori berdasarkan nama
            $category = Category::where('name', $product['category'])->first();
            Product::create([
                'name' => $product['name'],
                'price' => $product['price'],
                'stock' => $product['stock'],
                'category_id' => $category->id, // Set category_id
                'image' => null, // Anda dapat menambahkan logika untuk gambar jika perlu
            ]);
        }
    }
}
