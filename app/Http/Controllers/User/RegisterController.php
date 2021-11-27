<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(){
        return view('user.auth.register');
    }

    public function registerSubmit(Request $request){
        $this->validate($request,
        [
            'name'=>'required|min:2',
            'email'=>'required|unique:users,email',
            'password'=>'required|min:6|confirmed',
        ],
        [
            'name.min'=>'Tên phải có ít nhất 2 ký tự.',
            'email.unique'=>'Email đã tồn tại.',
            'password.min'=>'Mật khẩu phải có ít nhất 6 ký tự.',
            'name.required'=>'Vui lòng điền đầy đủ họ tên.',
            'email.required'=>'Vui lòng nhập email.',
            'password.required'=>'Vui lòng nhập mật khẩu.',
            'password.confirmed'=>'MK và Xác nhận MK phải giống nhau.',

        ]
    );
        $data=$request->all();
        // dd($data);
        $check=$this->create($data);
        Session::put('user',$data['email']);
        if($check){
            request()->session()->flash('success','Đăng ký thành công');
            return redirect()->route('user.login.form');
        }
        else{
            request()->session()->flash('error','Vui lòng thử lại!');
            return back();
        }
    }

    public function create(array $data){
        return User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password']),
        ]);
    }
}
