<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users=User::orderBy('id','ASC')->paginate(10);
        return view('admin.user.index')->with('users',$users);
    }
}