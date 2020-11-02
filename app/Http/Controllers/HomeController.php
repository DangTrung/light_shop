<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Contact;
use App\Order;
use App\OrderDetail;
use App\Product;
use App\ProductCate;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $prod_feat = Product::where('prod_featured', 'yes')->orderByDesc('prod_id')->take(3)->get();
        $prod = Product::orderByDesc('prod_id')->paginate(9);
        $prod_cate = ProductCate::all();
        $prod_count = Product::count('prod_id');
        $price = request('price');

        return view('pages.index', compact('prod', 'prod_feat', 'prod_cate', 'prod_count', 'price'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function contact_add(Request $request)
    {
        $cont = new Contact;

        $cont->contact_name = $request->name;
        $cont->contact_email = $request->email;
        $cont->contact_description = $request->description;
        $cont->save();

        return back()->with('success', 'Thanks your contact');
    }

    public function error()
    {
        return view('pages.404');
    }

    public function detail($id)
    {
        $prod = Product::find($id);
        $prod_rela = Product::where('prod_cate', '=', $prod->prod_cate)->orderBy(DB::raw('RAND()'))->take(3)->get();
        $info = DB::table('users')->join('comments', 'comments.cmt_user', '=', 'users.id')->get();
        $count = DB::table('orders')->join('order_details', 'orders.order_id', '=', 'order_details.detail_order')->join('products', 'products.prod_id', '=', 'order_details.detail_prod')->join('users', 'users.id', '=', 'orders.order_user')->where('detail_prod', $id)->where('order_user', Auth::user()->id)->count();
        $count_prod = DB::table('users')->join('comments', 'comments.cmt_user', '=', 'users.id')->count();

        return view('pages.product.detail', compact('prod', 'prod_rela', 'info', 'count', 'count_prod'));
    }

    public function category($id)
    {
        $cate_name = ProductCate::find($id);
        $prod_count = Product::count('prod_id');
        $prod_cate = ProductCate::all();
        $products = Product::where('prod_cate', $id)->paginate(6);
        $price = request('price');

        return view('pages.product.category', compact('cate_name', 'prod_count', 'prod_cate', 'products', 'price'));
    }

    public function search(Request $request)
    {
        $prod_cate = ProductCate::all();
        $keyword = $request->result;
        $price = $request->price;

        $prod = Product::where('prod_name', 'like', '%' . $keyword . '%')->get();
        $count = Product::where('prod_name', 'like', '%' . $keyword . '%')->count();
        return view('pages.search', compact('prod_cate', 'keyword', 'prod', 'count', 'price'));
    }

    public function filter(Request $request)
    {
        $prod_cate = ProductCate::all();
        $prod = Product::whereBetween('prod_price', [0, $request->price])->get();
        $count = Product::whereBetween('prod_price', [0, $request->price])->count();
        $price = $request->price;

        return view('pages.filter', compact('prod', 'prod_cate', 'count', 'price'));
    }

    public function account()
    {
        return view('pages.account.index');
    }

    public function account_edit()
    {
        $user = Auth::user();

        return view('pages.account.edit', compact('user'));
    }

    public function account_update(Request $request)
    {
        $image = request('image');

        if (Auth::user()->image == null) {
            $imagePath = request('image')->store('uploads', 'public');
            Auth::user()->name = $request->name;
            Auth::user()->email = $request->email;
            Auth::user()->phone = $request->phone;
            Auth::user()->image = $imagePath;
        } else {
            if ($image) {
                $detinationPath = 'storage/' . Auth::user()->image;
                if (file_exists($detinationPath)) {
                    unlink($detinationPath);
                }
                $imagePath = request('image')->store('uploads', 'public');
                Auth::user()->name = $request->name;
                Auth::user()->email = $request->email;
                Auth::user()->phone = $request->phone;
                Auth::user()->image = $imagePath;
            } else {
                Auth::user()->name = $request->name;
                Auth::user()->email = $request->email;
                Auth::user()->phone = $request->phone;
            }
            Auth::user()->save();
        }
        Auth::user()->save();

        return redirect()->route('account.index');
    }

    public function history()
    {
        $orders = Order::where('order_user', Auth::user()->id)->get();
        $count = Order::where('order_user', Auth::user()->id)->count();

        return view('pages.history.index', compact('orders', 'count'));
    }

    public function history_show($id) {
        $number = Order::find($id);
        $order = DB::table('orders')->join('order_details', 'orders.order_id', '=', 'order_details.detail_order')->join('products', 'products.prod_id', '=', 'order_details.detail_prod')->where('detail_order', $id)->get();

        return view('pages.history.show', compact('order', 'number'));
    }

    public function comment(Request $request) {
        $cmt = new Comment;
        $cmt->cmt_content = $request->content;
        $cmt->cmt_prod = $request->prod_id;
        $cmt->cmt_user = $request->user_id;
        $cmt->save();

        return back();
    }
}
