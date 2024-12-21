<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Laptops'],
            ['name' => 'SmartWatches'],
            ['name' => 'Cables'],
            ['name' => 'Power Banks'],
            ['name' => 'Chargers'],
        ]);
    }
}
