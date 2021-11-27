<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\CoachRoute;
use App\Models\Province;
use App\Models\Order;

class BookTicketController extends Controller
{
    public function index()
    {
        $province = Province::select('province.*')
                        ->get();
        $data = Order::join('users', 'order.userID', '=', 'users.id')
                ->select('order.*','users.name','users.email')
                ->get();
        return view('admin.bookticketinfo.index')
            ->with('data', $data)
            ->with('province', $province);
    }
}
