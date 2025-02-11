<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Models\Product;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $request->validate(['product_id' => 'required|integer']);
        $cartKey = "cart:user_1"; // Assume user_id=1 (modify for auth)

        Redis::hincrby($cartKey, $request->product_id, 1);
        return response()->json(['message' => 'Item added to cart']);
    }

    public function view()
    {
        $cartKey = "cart:user_1";
        $cart = Redis::hgetall($cartKey);

        return response()->json($cart);
    }

    public function remove($id)
    {
        $cartKey = "cart:user_1";
        Redis::hdel($cartKey, $id);

        return response()->json(['message' => 'Item removed from cart']);
    }
}
