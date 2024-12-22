<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class CartController extends Controller
{
    // Add product to cart
    public function addToCart(Request $request, $productId)
    {
        $quantity = $request->input('quantity', 1);  // Default quantity is 1
        $cart = Redis::get('cart') ? json_decode(Redis::get('cart'), true) : [];

        // Check if product already in cart, then update quantity
        if (isset($cart[$productId])) {
            $cart[$productId] += $quantity;
        } else {
            $cart[$productId] = $quantity;
        }

        // Store updated cart in Redis
        Redis::set('cart', json_encode($cart));

        return response()->json(['message' => 'Product added to cart successfully', 'cart' => $cart]);
    }

    // Remove product from cart
    public function removeFromCart($productId)
    {
        $cart = Redis::get('cart') ? json_decode(Redis::get('cart'), true) : [];

        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            Redis::set('cart', json_encode($cart));
            return response()->json(['message' => 'Product removed from cart', 'cart' => $cart]);
        }

        return response()->json(['message' => 'Product not found in cart'], 404);
    }

    // View cart
    public function viewCart()
    {
        $cart = Redis::get('cart') ? json_decode(Redis::get('cart'), true) : [];
        return response()->json(['cart' => $cart]);
    }

    // Clear cart
    public function clearCart()
    {
        Redis::del('cart');
        return response()->json(['message' => 'Cart cleared']);
    }

    public function placeOrder()
{
    $cart = Redis::get('cart') ? json_decode(Redis::get('cart'), true) : [];

    if (empty($cart)) {
        return response()->json(['message' => 'Cart is empty'], 400);
    }

    // Store the order in the database
    $order = new Order();
    $order->cart_items = json_encode($cart);
    $order->save();

    // Clear the cart
    Redis::del('cart');

    return response()->json(['message' => 'Order placed successfully', 'order' => $order]);
}


    public function add($id)
    {
        // Retrieve product by ID
        $product = Product::findOrFail($id);

        // Add the product to the Redis cart
        Redis::rpush('cart', json_encode($product));

        return redirect()->back()->with('success', 'Product added to cart');
    }


}
