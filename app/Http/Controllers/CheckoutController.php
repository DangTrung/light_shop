<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    public function index() {
        $total = Cart::total();
        $subtotal = Cart::subtotal();     
        $tax = Cart::tax();
        $cart = Cart::content();

        return view('pages.checkout', compact('total', 'subtotal', 'tax', 'cart'));
    }

    public function alert() {
        return view('pages.alert');
    }

    public function add(Request $request) {
        $order = new Order;
        $order->order_address = $request->address;
        $order->order_total = $request->total;
        $order->order_description = $request->description;
        $order->order_user = $request->user;
        $order->save();

        Cart::destroy();

        return redirect()->route('checkout.alert');
    }
}
