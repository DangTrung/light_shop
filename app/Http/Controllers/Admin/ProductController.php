<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Product;
use App\ProductCate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index() {
        $products = DB::table('products')->join('products_cate', 'products.prod_cate','=','products_cate.cate_id')->orderByDesc('prod_id')->get();
        return view('admin.product.index', compact('products'));
    }

    public function create() {
        $categories = ProductCate::all();
        return view('admin.product.create', compact('categories'));
    }

    public function store(AddProductRequest $request) {
        $imagePath = request('image')->store('uploads', 'public');

        $prod = new Product;
        $prod->prod_name = $request->name;
        $prod->prod_price = $request->price;
        $prod->prod_image = $imagePath;
        $prod->prod_status = $request->status;
        $prod->prod_description = $request->description;
        $prod->prod_featured = $request->featured;
        $prod->prod_discount = $request->discount;
        $prod->prod_cate = $request->categories;
        $prod->save();

        return redirect()->route('product.index');
    }
}
