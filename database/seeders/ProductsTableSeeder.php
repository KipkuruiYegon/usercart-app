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
                'image' => 'https://yellowappletechnologies.co.ke/wp-content/uploads/2024/09/460627453_826645719619646_1620332484551798664_n-jpg.webp', // Sample image URL
            ],
            [
                'name' => 'Apple Watch Series 8',
                'description' => 'Smartwatch with health and fitness tracking.',
                'price' => 70000, // Price in Ksh
                'category_id' => 2, // Assuming 'SmartWatches' category ID is 2
                'image' => 'https://marvelafrica.co.ke/wp-content/uploads/2024/03/Apple-Watch-Ultra-2-c-1.jpg', // Sample image URL
            ],
            [
                'name' => 'Anker PowerCore 20000mAh',
                'description' => 'High-capacity power bank for charging your devices.',
                'price' => 5000, // Price in Ksh
                'category_id' => 4, // Assuming 'Power Banks' category ID is 4
                'image' => 'https://i0.wp.com/www.laptoparena.co.ke/wp-content/uploads/2024/03/Anker-535-PowerHouse-512Wh-500W-1.webp?resize=1024%2C1024&ssl=1', // Sample image URL
            ],
            [
                'name' => 'Samsung Galaxy Charger',
                'description' => 'Fast charger for Samsung Galaxy devices.',
                'price' => 2000, // Price in Ksh
                'category_id' => 5, // Assuming 'Charger' category ID is 5
                'image' => 'https://www.uptechcomputerstore.com/wp-content/uploads/2024/03/Samsung-25W-Super-Fast-Wall-Charger-Black-Type-2.png', // Sample image URL
            ],
            [
                'name' => 'Anker USB-C to USB-C Cable',
                'description' => 'Durable and fast charging USB-C cable.',
                'price' => 1500, // Price in Ksh
                'category_id' => 3, // Assuming 'Cables' category ID is 3
                'image' => 'https://www.phoneplacekenya.com/wp-content/uploads/2024/11/Anker-333-USB-C-TO-C-6ft-100W-Braided-Cable.jpg', // Sample image URL
            ],
        ]);
    }
}
