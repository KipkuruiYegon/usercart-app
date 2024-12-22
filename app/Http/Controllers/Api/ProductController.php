<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::select('id', 'name', 'description', 'price', 'image')->paginate(20);
        return view('products', compact('products'));
    }

    public function show($id)
    {
        $product = Product::find($id);

        if ($product) {
            return view('templateview.product', compact('product'));
        }

        return redirect()->route('shop')->with('error', 'Product not found');
    }
}




