<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index() {
        $orders = DB::table('orders')->join('users', 'orders.order_user', '=', 'users.id')->orderByDesc('id')->get();
        return view('admin.order.index', compact('orders'));
    }
}
