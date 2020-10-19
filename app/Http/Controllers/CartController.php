<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function show() {
        $total = Cart::total();
        $discount = Cart::discount();
        $subtotal = Cart::subtotal()*(100-$discount)/100;
        
        $tax = Cart::tax();
        $cart = Cart::content();

        return view('pages.cart', compact('cart', 'total', 'subtotal', 'tax'));
    }

    public function add($id) {
        $prod = Product::find($id);

        $data['id'] = $prod->prod_id;
        $data['name'] = $prod->prod_name;
        $data['qty'] = $prod->prod_quantity;
        $data['weight'] = '1';
        $data['price'] = $prod->prod_price;
        $data['options']['image'] = $prod->prod_image;
        $data['options']['discount'] = $prod->prod_discount;

        Cart::add($data);
        
        return redirect()->route('cart.show');
    }

    public function delete($id) {
        Cart::remove($id);

        return back();
    }
}
