<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coach;

class CoachController extends Controller
{
    public function index()
    {
        $coach = Coach::orderBy('id','DESC')->paginate(10);
        return view('admin.coach.index')->with('coach',$coach);
    }
}