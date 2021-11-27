@extends('admin.layouts.master')
@section('title','SƠN PHÁT || THÔNG TIN LỘ TRÌNH')
@section('main-content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="row">
            <div class="col-md-12">
                {{-- @include('admin.layouts.notification') --}}
            </div>
        </div>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary float-left">Danh Sách Lộ Trình</h6>
            <a href="{{--route('users.create')--}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Thêm Tỉnh"><i class="fas fa-plus"></i> Thêm lộ trình</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="user-dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Biển số xe</th>
                        <th>Tên Nhà Xe</th>
                        <th>SĐT</th>
                        <th>Lộ trình</th>
                        <th>Mã Tỉnh</th>
                        <th>Giá Vé</th>
                        <th>Hành Động</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Biển số xe</th>
                        <th>Tên Nhà Xe</th>
                        <th>SĐT</th>
                        <th>Lộ trình</th>
                        <th>Mã Tỉnh</th>
                        <th>Giá Vé</th>
                        <th>Hành Động</th>
                    </tr>
                    </tfoot>
                    <tbody>
                        @foreach($data as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->license_plate}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->phone}}</td>
                            <td>
                                <?php 
                                    (int)$idprovs = explode("-", $row->serial);
                                ?>
                                @foreach ($idprovs as $idprov)
                                    @foreach ($province as $row2)
                                        @if ($row2->id == $idprov)
                                            {{$idprov}} - {{$row2->nameprovince}},
                                        @endif
                                    @endforeach
                                @endforeach
                            </td>
                            <td>{{$row->id_province}} - {{$row->nameprovince}}</td>
                            <td>{{$row->price}}</td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a>
                                <form method="POST" action="">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm dltBtn" data-id={{$row->id}} data-toggle="tooltip" data-placement="bottom" title="Delete" style="height:30px; width:30px;border-radius:50%"><i class="fas fa-trash-alt"></i></button>
                                </form>
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
