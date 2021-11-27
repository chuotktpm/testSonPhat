<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\CoachRoute;
use App\Models\Province;

class CoachRouteController extends Controller
{
    public function index()
    {
        $province = Province::select('province.*')
                        ->get();
        $data = CoachRoute::join('coachinfo', 'coachroute.license_plate', '=', 'coachinfo.license_plate')
                ->join('province', 'coachroute.id_province', '=', 'province.id')
                ->select('coachroute.*', 'coachinfo.name', 'coachinfo.phone', 'province.nameprovince')
                ->get();
        return view('admin.coachroute.index')
            ->with('data', $data)
            ->with('province', $province);
    }
}