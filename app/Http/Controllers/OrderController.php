<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\CoachRoute;
use App\Models\BookTicket;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $data = Order::select('order.*')
                        ->where('userID',Auth::id())
                        ->get();
        return view('user.orderinfo')
            ->with('data', $data);
    }

    public function order($id)
    {
        //Đã có id của order
        $provineIDBookeds = [];
        // $coachroute = CoachRoute::join('coachinfo', 'coachroute.license_plate', '=', 'coachinfo.license_plate')
        //     ->select('coachroute.*', 'coachinfo.name', 'coachinfo.phone')
        //     ->get();

        $order = Order::select('order.*')
            ->where('id', $id)
            ->get();
        foreach($order as $row)
        {
            $ticketserial = explode("-", $row->chainTicketID);
        }
        foreach($ticketserial as $ticketID)
        {
            $provineIDBooked = BookTicket::select('bookticket.provinceID')
            ->where('bookticket.id',$ticketID)
            ->get();
            foreach($provineIDBooked as $rowProvinceID)
            {
                array_push($provineIDBookeds, $rowProvinceID->provinceID);
            }
        }
        //Đã có array id tỉnh của các vé đã book = $provineIDBookeds
        // print_r($provineIDBookeds);

        $coachroute = CoachRoute::join('coachinfo', 'coachroute.license_plate', '=', 'coachinfo.license_plate')
        ->select('coachroute.*', 'coachinfo.name', 'coachinfo.phone');

        foreach($provineIDBookeds as $provineIDBooked)
        {
            $coachroute = $coachroute->orwhere('serial', 'like', '%'.$provineIDBooked.'%');
        }
        $coachroute = $coachroute->get();

        return view('home.orderfinish')
        ->with('coachroute', $coachroute)
        ->with('id', $id);
    }

    public function orderSubmit(Request $request, $id)
    {
        $this->validate(request(), [
            'coachrouteID' => '',
        ]);
        $data = $request->all();
        $check = Order::where('id', $id)
            ->update([
                'coachrouteID' => $data['coachrouteID'],
                'status' => 'done',
            ]);
            if($check){
                request()->session()->flash('success','Lưu Thành Công');
                return redirect()->route('user.orderinfo');
            }
            else{
                request()->session()->flash('success','Chọn chuyến xe!');
                return redirect()->back();
            }
    }
}
