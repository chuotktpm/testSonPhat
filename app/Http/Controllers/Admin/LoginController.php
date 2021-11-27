<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            if (Auth::check()) {
                return redirect()->route('admin.dashboard');
            } else {
                return view('admin.auth.login');
            }
        }

        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->with('authError', 'Email hoặc Password không chính xác');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}