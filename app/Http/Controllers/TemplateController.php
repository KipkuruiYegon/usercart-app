<?php

namespace App\Http\Controllers;

use App\Models\Product;

class TemplateController extends Controller
{
    public function index()
    {
        // Set a time limit for the request (optional)
        set_time_limit(60);

        // Fetch products directly from the database
        $products = Product::select('id', 'name', 'description', 'price', 'image')->paginate(20);

        // Return the view with the products
        return view('templateview.home', compact('products'));
    }
}






