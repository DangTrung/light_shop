<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCate;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {
        $prod_feat = Product::where('prod_featured', 'yes')->orderByDesc('prod_id')->take(3)->get();
        $prod = Product::orderByDesc('prod_id')->paginate(9);
        $prod_cate = ProductCate::all();
        $prod_count = Product::count('prod_id');
        return view('pages.index', compact('prod', 'prod_feat', 'prod_cate', 'prod_count'));
    }

    public function about() {
        return view('pages.about');
    }

    public function contact() {
        return view('pages.contact');
    }

    public function error() {
        return view('pages.404');
    }

    public function detail($id) {
        $prod = Product::find($id);
        $prod_rela = Product::where('prod_cate', '=', $prod->prod_cate)->orderBy(DB::raw('RAND()'))->take(3)->get();

        return view('pages.product.detail', compact('prod', 'prod_rela'));
    }

    public function category($id) {
        $cate_name = ProductCate::find($id);
        $prod_count = Product::count('prod_id');
        $prod_cate = ProductCate::all();
        $products = Product::where('prod_cate', $id)->paginate(6);

        return view('pages.product.category', compact('cate_name', 'prod_count', 'prod_cate', 'products'));
    }
}
