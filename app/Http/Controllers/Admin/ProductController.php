<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ProductCate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function getProduct() {
        $products = DB::table('products')->join('products_cate', 'products.prod_cate','=','products_cate.cate_id')->orderByDesc('prod_id')->get();
        return view('admin.product.index', compact('products'));
    }

    public function createProduct() {
        $categories = ProductCate::all();
        return view('backend.product-create', compact('categories'));
    }
}
