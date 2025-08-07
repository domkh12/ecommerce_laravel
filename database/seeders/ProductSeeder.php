<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Laptop Pro',
                'description' => 'High-performance laptop for professionals',
                'price' => 1299.99,
                'stock_quantity' => 25,
                'sku' => 'LAP001',
                'category' => 'Electronics',
                'is_active' => true,
            ],
            [
                'name' => 'Wireless Mouse',
                'description' => 'Ergonomic wireless mouse with precision tracking',
                'price' => 29.99,
                'stock_quantity' => 100,
                'sku' => 'MOU001',
                'category' => 'Accessories',
                'is_active' => true,
            ],
            // Add more sample products...
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
