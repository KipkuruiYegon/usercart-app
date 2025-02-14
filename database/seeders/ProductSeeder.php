<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'category_id' => 1,
                'name' => 'Apple Watch Series 8',
                'description' => 'Smartwatch with health and fitness tracking.',
                'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cHJvZHVjdHxlbnwwfHwwfHx8MA%3D%3D',
                'price' => 70000
            ],
            [
                'category_id' => 2,
                'name' => 'Anker PowerCore 20000mAh',
                'description' => 'High-capacity power bank for charging your devices.',
                'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cHJvZHVjdHxlbnwwfHwwfHx8MA%3D%3D',
                'price' => 5000
            ],
            [
                'category_id' => 3,
                'name' => 'Samsung Galaxy Charger',
                'description' => 'Fast charger for Samsung Galaxy devices.',
                'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cHJvZHVjdHxlbnwwfHwwfHx8MA%3D%3D',
                'price' => 2000
            ],
            [
                'category_id' => 4,
                'name' => 'Anker USB-C to USB-C Cable',
                'description' => 'Durable and fast charging USB-C cable.',
                'image' => 'https://www.phoneplacekenya.com/wp-content/uploads/2024/11/Anker-333-USB-C-TO-C-6ft-100W-Braided-Cable.jpg',
                'price' => 1500
            ],
            [
                'category_id' => 5,
                'name' => 'Logitech MX Master 3 Mouse',
                'description' => 'Wireless high-precision productivity mouse.',
                'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cHJvZHVjdHxlbnwwfHwwfHx8MA%3D%3D',
                'price' => 13000
            ],
            [
                'category_id' => 6,
                'name' => 'Sony WH-1000XM4 Headphones',
                'description' => 'Noise-canceling over-ear headphones.',
                'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cHJvZHVjdHxlbnwwfHwwfHx8MA%3D%3D',
                'price' => 35000
            ],
            [
                'category_id' => 7,
                'name' => 'JBL Flip 6 Bluetooth Speaker',
                'description' => 'Portable waterproof Bluetooth speaker.',
                'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cHJvZHVjdHxlbnwwfHwwfHx8MA%3D%3D',
                'price' => 18000
            ],
            [
                'category_id' => 8,
                'name' => 'Dell XPS 13 Laptop',
                'description' => 'High-performance ultra-portable laptop.',
                'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cHJvZHVjdHxlbnwwfHwwfHx8MA%3D%3D',
                'price' => 150000
            ],
            [
                'category_id' => 9,
                'name' => 'Razer BlackWidow Keyboard',
                'description' => 'Mechanical gaming keyboard with RGB lighting.',
                'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cHJvZHVjdHxlbnwwfHwwfHx8MA%3D%3D',
                'price' => 22000
            ],
            [
                'category_id' => 10,
                'name' => 'GoPro Hero 10',
                'description' => 'Waterproof action camera with 5K recording.',
                'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cHJvZHVjdHxlbnwwfHwwfHx8MA%3D%3D',
                'price' => 65000
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
