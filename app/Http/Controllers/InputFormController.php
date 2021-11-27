<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\BookTicket;
use App\Models\Province;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class InputFormController extends Controller
{
    public function index($count = 1)
    {
        $data = $count;
        $province = Province::select('province.*')
                        ->get();
        return view('home.bookticket.inputform')
            ->with('data', $data)
            ->with('province', $province);
    }

    public function inputSubmit(Request $request, $count = 1)
    {
        $idticket = "";
        for($i=1; $i<=$count;$i++)
        {
            $name = "name".$i;
            $sdt = "sdt".$i;
            $destination = "destination".$i;
            $this->validate(request(), [
                (string)$name => '',
                (string)$sdt => '',
                (string)$destination => '',
            ]);
            $data=$request->all();
            $check=$this->create($data, $i);
            if($check){
                if($i==$count)
                {
                    $idticket = (string)"".$idticket."".$check->id;
                }
                else
                {
                    $idticket = (string)"".$idticket."".$check->id."-";
                }
                
            }
        }
        $checkOrder=$this->createOrder($idticket);

        if($checkOrder){
            request()->session()->flash('success','Đăng ký thành công');
            return redirect()->route('editform', ['count' => $count,'id'=>$checkOrder->id]);
        }
        else{
            request()->session()->flash('error','Vui lòng thử lại!');
            return back();
        }
    }

    public function editform($count, $id)
    {
        $data = array('count' => $count, 'id' => $id);
        $tickets = [];
        $order = Order::select('order.*')
            ->where('id', $id)
            ->get();
            foreach($order as $row)
            {
                $ticketserial = explode("-", $row->chainTicketID);
            }
            foreach($ticketserial as $ticketID)
            {
                $ticket = BookTicket::join('province', 'bookticket.provinceID', '=', 'province.id')
                ->select('bookticket.*', 'province.nameprovince')
                ->where('bookticket.id',$ticketID)
                ->get();
                array_push($tickets, $ticket);
            }
        
        $province = Province::select('province.*')
                        ->get();
        return view('home.bookticket.editform')
            ->with('data', $data)
            ->with('tickets', $tickets)
            ->with('province', $province);
    }



    public function editSubmit(Request $request, $count, $id)
    {
        $order = Order::select('order.*')
            ->where('id', $id)
            ->get();
        foreach($order as $row)
        {
            $ticketserial = explode("-", $row->chainTicketID);
        }
        for($i=1; $i<=$count;$i++)
        {
            $name = "name".$i;
            $sdt = "sdt".$i;
            $destination = "destination".$i;
            $this->validate(request(), [
                (string)$name => '',
                (string)$sdt => '',
                (string)$destination => '',
                'submitButton' => '',
            ]);
            $data=$request->all();
            $check=$this->edit($data, $i, $ticketserial[$i-1]);
        }
        $submitButton = $request->all();
        $this->validate(request(), [
            'submitButton' => '',
        ]);
        if($submitButton['submitButton']=='Lưu'){
            request()->session()->flash('success','Lưu Thành Công');
            return redirect()->route('user.orderinfo');
        }
        else{
            request()->session()->flash('success','Chọn chuyến xe!');
            return redirect()->route('orderform',['id'=>$id]);
        }
    }

    public function create(array $data, $i){
        $userID = Auth::id();
        $provinceID = "destination".$i;
        $name = "name".$i;
        $sdt = "sdt".$i;
        if($data[(string)$provinceID])
        {
            return BookTicket::create([
                'userID'=>$userID,
                'provinceID'=>$data[(string)$provinceID],
                'namecustomer'=>$data[(string)$name],
                'phonecustomer'=>$data[(string)$sdt],
            ]);
        }
        else
        {
            return BookTicket::create([
                'userID'=>$userID,
                'provinceID'=>'1',
                'namecustomer'=>$data[(string)$name],
                'phonecustomer'=>$data[(string)$sdt],
            ]);
        }

    }

    public function createOrder($idticket){
        $userID = Auth::id();
        return Order::create([
            'userID'=>$userID,
            'coachrouteID'=>null,
            'chainTicketID'=>$idticket,
        ]);
    }

    public function edit(array $data, $i, $idticket)
    {
        $provinceID = "destination".$i;
        $name = "name".$i;
        $sdt = "sdt".$i;
        return DB::table('bookticket')
              ->where('id', $idticket)
              ->update([
                  'provinceID' => $data[(string)$provinceID],
                  'namecustomer' => $data[(string)$name],
                  'phonecustomer' => $data[(string)$sdt],
                ]);
    }
}
