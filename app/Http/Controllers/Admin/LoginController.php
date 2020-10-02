<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin() {
        return view('admin.login');
    }

    public function postLogin(Request $request) {
        $arr = ['email' => $request->email, 'password' => $request->password];

        if (Auth::attempt($arr)) {
            return redirect()->route('home');
        } else {
            return back()->withInput()->with('error', 'Email or password is incorrect');
        }
    }
}
