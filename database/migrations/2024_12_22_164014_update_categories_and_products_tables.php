<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCategoriesAndProductsTables extends Migration
{
    public function up()
    {
        // Add 'name' column to 'categories' table if it doesn't exist
        Schema::table('categories', function (Blueprint $table) {
            if (!Schema::hasColumn('categories', 'name')) {
                $table->string('name')->after('id');
            }
        });

        // Add 'category_id' foreign key to 'products' table
        Schema::table('products', function (Blueprint $table) {
            // Ensure the 'category_id' column exists before adding the foreign key
            if (!Schema::hasColumn('products', 'category_id')) {
                $table->foreignId('category_id')->constrained()->onDelete('cascade');
            }
        });
    }

    public function down()
    {
        // Drop the 'category_id' column and foreign key in 'products'
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });

        // Drop the 'name' column in 'categories'
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('name');
        });
    }
}

