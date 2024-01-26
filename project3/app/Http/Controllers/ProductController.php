<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\stonks;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    public function index()
    {
        $products = stonks::all();
        return view('index', [
            'products' => $products
        ]);
    }
    
    public function showCart()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    public function addToCart($id, Request $request)
{
    $product = stonks::findOrFail($id);
    $cart = session()->get('cart', []);
    $size = $request->input('size'); 

    if (isset($cart[$id])) {
        $cart[$id]['quantity']++;
    } else {
        $cart[$id] = [
            "name" => $product->title,
            "quantity" => 1,
            "price" => $product->getPriceBySize($size),
            "image" => $product->imagePath,
            "size" => $size,
            "price_small" => $product->price_small,
            "price_medium" => $product->price_medium,
            "price_large" => $product->price_large,
        ];
        
    }
    session()->put('cart', $cart);
    return redirect()->route('products.index')->with('success', 'Product toegevoegd aan winkelmandje.');
}

    private function getPriceBySize($product, $size)
    {
        $finalPrice = stonks::SIZE_FACTORS[$size] * $product->price;

    }

    public function updateCart(Request $request)
    {
        $cart = session()->get('cart', []);

        foreach ($request->input('quantity') as $id => $quantity) {
            if (isset($cart[$id])) {
                $cart[$id]['quantity'] = $quantity;
            }
        }

        session()->put('cart', $cart);
        return redirect()->route('cart.show')->with('success', 'Cart was succesvol geupdate.');
    }

    public function removeFromCart($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.show')->with('success', 'Product was succesvol verwijderd.');
    }

    public function status()
    {
        $user = auth()->user();
        $cart = session()->get('cart', []);
        $order = Order::create([
            'user_id' => $user->id,
            'status' => 'In Process',
        ]);

        session()->forget('cart');
        return view('status', compact('order'));
    }
}
