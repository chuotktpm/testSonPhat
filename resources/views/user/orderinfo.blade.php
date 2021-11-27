@extends('user.layouts.master')
@section('title','SƠN PHÁT || THÔNG TIN ĐẶT VÉ')
@section('main-content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="row">
            <div class="col-md-12">
                {{-- @include('admin.layouts.notification') --}}
            </div>
        </div>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary float-left">Danh Sách Đặt Vé</h6>
            <a href="{{route('inputform')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Đặt vé"><i class="fas fa-plus"></i> Đặt vé</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="user-dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID Người Dùng</th>
                        <th>ID Chuyến Xe Đã Đặt</th>
                        <th>ID Vé Đã Đặt</th>
                        <th>Ngày Đặt</th>
                        <th>Update</th>
                        <th>Link</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>ID Người Dùng</th>
                        <th>ID Chuyến Xe Đã Đặt</th>
                        <th>ID Vé Đã Đặt</th>
                        <th>Ngày Đặt</th>
                        <th>Update</th>
                        <th>Link</th>
                    </tr>
                    </tfoot>
                    <tbody>
                        @foreach($data as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->userID}} - {{Auth::user()->name}}</td>
                            <td>{{$row->coachrouteID }}</td>
                            <td>{{$row->chainTicketID}}</td>
                            <?php 
                                (int)$idTicket = explode("-", $row->chainTicketID);
                            ?>
                            <td>{{(($row->created_at)? $row->created_at->diffForHumans() : '')}}</td>
                            <td>{{(($row->updated_at)? $row->updated_at->diffForHumans() : '')}}</td>
                            <td>
                                @if ($row->status=='unfinished')
                                    <a href="{{ route('editform', ['count' => count($idTicket),'id'=>$row->id]) }}" class="" style="" data-toggle="tooltip" title="edit" data-placement="bottom">{{ route('editform', ['count' => count($idTicket),'id'=>$row->id]) }}</a>
                                @else
                                    Đã đặt
                                @endif
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <span style="float:right">{{--$users->links()--}}</span>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <style>
        div.dataTables_wrapper div.dataTables_paginate{
            display: none;
        }
    </style>
@endpush

@push('scripts')

    <!-- Page level plugins -->
    <script src="{{asset('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('backend/js/demo/datatables-demo.js')}}"></script>
    <script>

        $('#user-dataTable').DataTable( {
            "columnDefs":[
                {
                    "orderable":false,
                    "targets":[7]
                }
            ]
        } );

        // Sweet alert

        function deleteData(id){

        }
    </script>
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.dltBtn').click(function(e){
                var form=$(this).closest('form');
                var dataID=$(this).data('id');
                // alert(dataID);
                e.preventDefault();
                swal({
                    title: "Bạn chắc chứ?",
                    text: "Nếu bạn xoá người dùng này, bạn không thể khôi phục lại giá trị đã mất!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            form.submit();
                        }
                    });
            })
        })
    </script>
@endpush
