<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class OrderController extends Controller
{
    public function placeOrder()
    {
        $cartKey = "cart:user_1";
        $cart = Redis::hgetall($cartKey);

        if (empty($cart)) {
            return response()->json(['message' => 'Cart is empty'], 400);
        }

        $total = 0;
        foreach ($cart as $productId => $quantity) {
            $product = Product::find($productId);
            if ($product) {
                $total += $product->price * $quantity;
            }
        }

        $order = Order::create([
            'items' => json_encode($cart), // Convert array to JSON
            'total' => $total
        ]);

        Redis::del($cartKey); // Clear cart after placing order

        return response()->json($order, 201);
    }

    public function viewOrders()
    {
        return response()->json(Order::all());
    }
}
