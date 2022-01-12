<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;
use App\Models\Order;

class OrderController extends Controller
{
    public function index(){
        return view('admin.orders.index');
    }
    public function getOrders(){
        $orders = Order::all();
        return view('admin.orders.index', [
            'orders' => $orders,
        ]);
    }
// json_decode()
    public function saveOrder(Request $request) {
        $cart_id = $_COOKIE['cart_id'];
        \Cart::session($cart_id);
        $products = \Cart::getContent();
        Order::create([
            'name' => $request->get('name'),
            'cart_products' => $products,
            'number_phone' => $request->get('number_phone'),
        ]);
//        return redirect(''); (( Ретюрн на страницу спасиба за заказ пидарас))
//        return view('admin.orders.index', [
//            'products' => $products->toJson(),
//            'request' => $request,
//        ]);
    }
}
