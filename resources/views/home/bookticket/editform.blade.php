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
                        <h3 class="panel-title">ĐẶT VÉ {{$data['count']}} NGƯỜI</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="{{ route('editSubmit', ['count'=>$data['count'], 'id'=>$data['id']])}}">
                            @csrf
                            <fieldset>
                                <?php 
                                    $i=0;
                                ?>
                                @foreach ($tickets as $ticket)
                                    <div class="form-group">
                                        @foreach ($ticket as $rowticket)
                                        <h3 class="panel-title">NGƯỜI {{$i+1}}</h3>
                                        <div class="form-group">
                                            <label for="province">Họ Tên :</label>
                                            <input class="form-control" placeholder="Nhập tên" name="name{{$i+1}}" type="text" value="{{$rowticket->namecustomer}}" autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label for="province">Số điện thoại:</label>
                                            <input class="form-control" placeholder="Nhập SĐT" name="sdt{{$i+1}}" type="number" value="{{$rowticket->phonecustomer}}" step="0.01">
                                        </div>
                                        <div class="form-group">
                                            <label for="province">Điểm đến:</label>
                                            <select class="form-control" id="province" name="destination{{$i+1}}">
                                                <option value="{{$rowticket->provinceID}}">{{$rowticket->nameprovince}}</option>
                                                @foreach ($province as $row)
                                                    @if ($rowticket->provinceID!=$row->id)
                                                        <option value="{{$row->id}}">{{$row->nameprovince}}</option>
                                                    @endif
                                                @endforeach
                                                <option value="">---------------------</option>
                                            </select>
                                        </div>
                                        @endforeach
                                    </div>
                                    
                                    <?php
                                        $i++;
                                    ?>
                                @endforeach
                                {{-- @endfor --}}
                                
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="Lưu" name="submitButton" style="background: #73cc75; color: white;">
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="Đặt Xe" name="submitButton" style="background: #3c763d; color: white;">
                                
                                @if ($data['count'] > 1)
                                    <!-- The Modal -->
                                    <div id="myModal" class="modal">
                                        <!-- Modal content -->
                                        <div class="modal-content">
                                            <div class="input-group">
                                                <input id="myLink" class="form-control" type="text" value="{{ route('editform', ['count'=>$data['count'], 'id'=>$data['id']])}}" autofocus style="display: inline">
                                                <span id="btnCpy" class="input-group-addon" style="cursor: pointer;">Copy vào bộ nhớ đệm</span>
                                                <span class="close"></span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                @endif
                                
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

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 350px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>

<script>
    function myFunction() {
        document.getElementById("container").innerHTML += "<div class='container'><div class='content'>	<div class='row'><div class='col-md-8 col-md-offset-2'><div class='panel panel-success add-panel'><div class='panel-heading'><h3 class='panel-title'>ĐIỀN THÔNG TIN</h3></div><div class='panel-body'><form role='form' method='POST' action=''><fieldset><div class='form-group'><label for='province'>Họ Tên</label><input class='form-control' placeholder='Nhập tên' name='txtName' type='text' autofocus></div><div class='form-group'><label for='province'>Số điện thoại:</label><input class='form-control' placeholder='Nhập SĐT' name='txtEmail' type='number' step='0.01' value='' ></div><div class='form-group'><label for='province'>Điểm đến:</label><select class='form-control' id='province'><option>---Chọn điểm đến---</option> <option>Hà Nội</option><option>Bắc Giang</option><option>Cao Bằng</option><option>Thái Bình</option></select></div><input class='btn btn-lg btn-success btn-block' type='submit' value='Đặt' name='btnAdd' style='background: #3c763d; color: white;'><a href='./showList' class='btn btn-default btn-block'>Cancel</a></fieldset></form></div></div></div></div></div></div>"
    }
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button copy in the modal
    var btnCpy = document.getElementById("btnCpy");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    modal.style.display = "block";

    btnCpy.onclick = function() {
        /* Get the text field */
        var copyText = document.getElementById("myLink");
        document.getElementById("btnCpy").textContent="Đã lưu vào clipboard";


        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        navigator.clipboard.writeText(copyText.value);
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

@endsection