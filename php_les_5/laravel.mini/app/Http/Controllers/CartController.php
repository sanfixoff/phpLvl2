<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductImage;
use App\Models\Product;
use App\Models\Category;
use Darryldecode\Cart\Cart;

class CartController extends Controller
{
    public function index() {
        $cart_id = $_COOKIE['cart_id'];
        \Cart::session($cart_id);
        $products = \Cart::getContent();

        return view('cart.index', [
            'products' => $products,
        ]);
    }

    public function addToCart(Request $request){
        $product = Product::where('id', $request->id)->first();

        if(!isset($_COOKIE['cart_id'])) setcookie('cart_id', uniqid());
        $cart_id = $_COOKIE['cart_id'];
        \Cart::session($cart_id);

        \Cart::add([
            'id' => $product->id,
            'name' => $product->title,
            'price' => $product->new_price ? $product->new_price : $product->price,
            'quantity' => $request->quantity,
            'attributes' => [
                'img' => (isset($product->images[0]->img)) ? $product->images[0]->img : 'no_image.png'
            ]
        ]);
        return response()->json(\Cart::getContent());
    }

    public function clearCart() {
        $cart_id = $_COOKIE['cart_id'];
        \Cart::session($cart_id)->clear();
        \Cart::clear();
    }

}
