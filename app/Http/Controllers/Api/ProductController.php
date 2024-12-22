<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Fetch products directly from the database
        $products = Product::select('id', 'name', 'description', 'price', 'image')->paginate(20);

        // Return the products to the view
        return view('products', compact('products'));
    }
}



