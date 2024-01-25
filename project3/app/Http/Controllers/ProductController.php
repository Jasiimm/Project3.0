<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index', [
            'products' => $products
        ]);
    }
    
public function showCart()
{
    $cart = session()->get('cart', []);
    return view('cart', compact('cart'));
}

public function addToCart($id)
{
    $product = Product::findOrFail($id);
    $cart = session()->get('cart', []);

    if (isset($cart[$id])) {
        $cart[$id]['quantity']++;
    } else {
        $cart[$id] = [
            "name" => $product->title,
            "quantity" => 1,
            "price" => $product->price,
            "image" => $product->imagePath
        ];
    }

    session()->put('cart', $cart);
    return redirect()->route('products.index')->with('success', 'Product added to cart.');
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
    return redirect()->route('cart.show')->with('success', 'Cart updated successfully.');
}

public function removeFromCart($id)
{
    $cart = session()->get('cart', []);

    if (isset($cart[$id])) {
        unset($cart[$id]);
        session()->put('cart', $cart);
    }

    return redirect()->route('cart.show')->with('success', 'Product removed from cart.');
}
}