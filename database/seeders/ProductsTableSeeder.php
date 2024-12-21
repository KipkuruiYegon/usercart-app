<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Dell XPS 13',
                'description' => 'A powerful laptop with Intel Core i7 processor and 16GB RAM.',
                'price' => 150000, // Price in Ksh
                'category_id' => 1, // Assuming 'Laptops' category ID is 1
            ],
            [
                'name' => 'Apple Watch Series 8',
                'description' => 'Smartwatch with health and fitness tracking.',
                'price' => 70000, // Price in Ksh
                'category_id' => 2, // Assuming 'SmartWatches' category ID is 2
            ],
            [
                'name' => 'Anker PowerCore 20000mAh',
                'description' => 'High-capacity power bank for charging your devices.',
                'price' => 5000, // Price in Ksh
                'category_id' => 4, // Assuming 'Power Banks' category ID is 4
            ],
            [
                'name' => 'Samsung Galaxy Charger',
                'description' => 'Fast charger for Samsung Galaxy devices.',
                'price' => 2000, // Price in Ksh
                'category_id' => 5, // Assuming 'Charger' category ID is 5
            ],
            [
                'name' => 'Anker USB-C to USB-C Cable',
                'description' => 'Durable and fast charging USB-C cable.',
                'price' => 1500, // Price in Ksh
                'category_id' => 3, // Assuming 'Cables' category ID is 3
            ],
        ]);
    }
}
