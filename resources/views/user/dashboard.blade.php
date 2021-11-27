@extends('user.layouts.master')
@section('title','HOA HONG MOBILE || NGƯỜI DÙNG')
@section('main-content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="row">
          <div class="col-md-12">
              {{-- @include('admin.layouts.notification') --}}
          </div>
      </div>
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary float-left">Thông tin người dùng</h6>
      </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="user-dataTable" width="100%" cellspacing="0">
                  <thead>
                  <tr>
                      <th>ID</th>
                      <th>Tên</th>
                      <th>Email</th>
                      <th>Thời gian tạo</th>
                      <th>Thời gian cập nhật</th>
                  </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>{{Auth::user()->id}}</td>
                          <td>{{Auth::user()->name}}</td>
                          <td>{{Auth::user()->email}}</td>
                          <td>{{((Auth::user()->created_at)? Auth::user()->created_at->diffForHumans() : '')}}</td>
                          <td>{{((Auth::user()->updated_at)? Auth::user()->created_at->diffForHumans() : '')}}</td>
                      </tr>
                  </tbody>
              </table>
              <span style="float:right">{{--$users->links()--}}</span>
          </div>
      </div>
  </div>
@endsection
