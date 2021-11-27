<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CoachRoute;

class HomeController extends Controller
{
    public function index()
    {
        $data = CoachRoute::join('coachinfo', 'coachroute.license_plate', '=', 'coachinfo.license_plate')
                ->join('province', 'coachroute.id_province', '=', 'province.id')
                ->select('coachroute.*', 'coachinfo.*')
                ->get();
        return view('home.index')
        ->with('data', $data);
    }
}