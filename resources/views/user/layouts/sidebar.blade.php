<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('user.home')}}">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('img/purepng.com-white-busbusvehiclecarrying-passengerslarge-motor-vehiclecoachminibus-1701528460765uflu7.png') }}" height="42px" width="55px">
        </div>
        <div class="sidebar-brand-text mx-3">SƠN PHÁT</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="{{route('user.dashboard')}}">
        <i class="fas fa-users"></i>
        <span>Thông tin cá nhân</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Thông tin
        </div>
    <!--Orders -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('user.orderinfo')}}">
            <i class="fas fa-hammer fa-chart-area"></i>
            <span>Thông tin chuyến đi</span>
        </a>
    </li>
</ul>
