<?php

namespace App\Http\Controllers\Api;

use Illuminate\Routing\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        // Fetch all categories with their products
        $categories = Category::with('products')->get(); // Eager load the products

        return response()->json($categories);
    }

    public function show(Category $category)
    {
        // Fetch products for a specific category
        $category->load('productss');
        return response()->json($category->products);
    }
}


