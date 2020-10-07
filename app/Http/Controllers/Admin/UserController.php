<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->join('roles', 'users.role', '=', 'roles.role_id')->get();
        return view('admin.user.index', compact('users'));
    }

    public function show($id) {
        $user = DB::table('users')->join('roles', 'users.role', '=', 'roles.role_id')->where('id', $id)->first();
        return view('admin.user.index', compact('users'));
    }
}
