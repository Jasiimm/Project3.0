<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Session;
use Illuminate\Support\Facades\Auth;

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
        return redirect()->route('products.index')->with('success', 'Product toegevoegd aan winkelmandje.');
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

    public function purchaseNow()
    {
    
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Login voordat je kan bestellen');
        }

        Session::forget('cart'); 
        return redirect()->route('products.index')->with('success', 'Bestelling succesvol geplaatst.');
    }
}
