<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Province;

class ProvinceController extends Controller
{
    public function index()
    {
        $province = Province::orderBy('id','DESC')->paginate(10);
        return view('admin.province.index')->with('province',$province);
    }
}