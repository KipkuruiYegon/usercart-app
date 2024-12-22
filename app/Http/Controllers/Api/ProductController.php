<?php

namespace App\Http\Controllers\Api;

use Illuminate\Routing\Controller; // Correct import for Controller
use App\Models\Product;

class ProductController extends Controller
{
    // Fetch all products
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    // Fetch a single product
    public function show(Product $product)
    {
        return response()->json($product);
    }
}
