<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function login(){
        if (Auth::check()) {
            return redirect()->route('home');
        } else {
            return view('user.auth.login');
        }
    }

    public function loginSubmit(Request $request){

        $this->validate($request,
        [
            'email'=>'required|exists:users,email',
            'password'=>'required',
        ],
        [
            'email.exists'=>'Email không tồn tại.',
            'email.required'=>'Vui lòng nhập email.',
            'password.required'=>'Vui lòng nhập mật khẩu.',
        ]
    );
        $data= $request->all();
        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']])){
            Session::put('user',$data['email']);
            request()->session()->flash('success','Đăng nhập thành công.');
            return redirect()->route('home');
        }
        else{
            request()->session()->flash('error','Mật khẩu không chính xác.');
            return redirect()->back();
        }
    }

    public function logout(){
        Session::forget('user');
        Auth::logout();
        request()->session()->flash('success','Đăng xuất thành công.');
        return redirect()->route('user.login.form');
    }
}