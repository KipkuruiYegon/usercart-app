<?php

namespace App\Http\Controllers\Api;

use Illuminate\Routing\Controller;  // Correct import for Controller
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        // Fetch all categories
        $categories = Category::all();
        return response()->json($categories);
    }

    public function show(Category $category)
    {
        // Fetch products for a specific category
        $category->load('products');
        return response()->json($category->products);
    }
}

