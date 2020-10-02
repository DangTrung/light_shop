<?php

namespace App\Http\Controllers\Admin;

use App\ArticleCate;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductCate;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $product = Product::count('prod_id');
        $category = ProductCate::count('cate_id') + ArticleCate::count('cate_id');
        $user = User::count('id');
        return view('admin.index', compact('product', 'category', 'user'));
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('getLogin');
    }
}
