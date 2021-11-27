@extends('home.layouts.master')
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('title','SON PHAT || ĐIỀN THÔNG TIN')
@section('main-content')

<div class="container">
    <div class="content">	
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-success add-panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">CHỌN CHUYẾN XE</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="{{ route('orderSubmit', ['id'=> $id]) }}">
                            @csrf
                            <fieldset>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="coachroute">Chọn chuyến xe:</label>
                                        <select class="form-control" id="coachroute" name="coachrouteID">
                                            <option value="">---Chọn chuyến xe---</option>
                                            @foreach ($coachroute as $row)
                                                <option value="{{$row->id}}">{{$row->license_plate}} - {{$row->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="Xác Nhận" name="btnok" style="background: #3c763d; color: white;">
                                {{-- <a href="route()->back()" class="btn btn-default btn-block">Cancel</a> --}}
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
.images-slider{
    display: none;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
}

input[type=number] {
    -moz-appearance:textfield; /* Firefox */
}
</style>

<script>
    function myFunction() {
        document.getElementById("container").innerHTML += "<div class='container'><div class='content'>	<div class='row'><div class='col-md-8 col-md-offset-2'><div class='panel panel-success add-panel'><div class='panel-heading'><h3 class='panel-title'>ĐIỀN THÔNG TIN</h3></div><div class='panel-body'><form role='form' method='POST' action=''><fieldset><div class='form-group'><label for='province'>Họ Tên</label><input class='form-control' placeholder='Nhập tên' name='txtName' type='text' autofocus></div><div class='form-group'><label for='province'>Số điện thoại:</label><input class='form-control' placeholder='Nhập SĐT' name='txtEmail' type='number' step='0.01' value='' ></div><div class='form-group'><label for='province'>Điểm đến:</label><select class='form-control' id='province'><option>---Chọn điểm đến---</option> <option>Hà Nội</option><option>Bắc Giang</option><option>Cao Bằng</option><option>Thái Bình</option></select></div><input class='btn btn-lg btn-success btn-block' type='submit' value='Đặt' name='btnAdd' style='background: #3c763d; color: white;'><a href='./showList' class='btn btn-default btn-block'>Cancel</a></fieldset></form></div></div></div></div></div></div>"
    }
    </script>

@endsection
