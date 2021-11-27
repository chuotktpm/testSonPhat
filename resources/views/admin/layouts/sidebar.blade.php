<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('img/purepng.com-white-busbusvehiclecarrying-passengerslarge-motor-vehiclecoachminibus-1701528460765uflu7.png') }}" height="42px" width="55px">
        </div>
        <div class="sidebar-brand-text mx-3">Sơn Phát</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Bảng quản trị</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Thông tin
    </div>

    <!-- Categories -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#categoryCollapse" aria-expanded="true" aria-controls="categoryCollapse">
            <i class="fas fa-sitemap"></i>
            <span>Thông tin các tỉnh</span>
        </a>
        <div id="categoryCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{--route('category.index')--}}">Thêm thông tin tỉnh</a>
                <a class="collapse-item" href="{{route('admin.province.list')}}">Danh sách các tỉnh</a>
            </div>
        </div>
    </li>
    {{-- Products --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#productCollapse" aria-expanded="true" aria-controls="productCollapse">
            <i class="fas fa-truck"></i>
            <span>Thông tin nhà xe</span>
        </a>
        <div id="productCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{--route('product.index')--}}">Thêm nhà xe</a>
                <a class="collapse-item" href="{{route('admin.coach.list')}}">Danh sách nhà xe</a>
            </div>
        </div>

    {{-- Brands --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#brandCollapse" aria-expanded="true" aria-controls="brandCollapse">
            <i class="fas fa-table"></i>
            <span>Thông tin lộ trình</span>
        </a>
        <div id="brandCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{--route('brand.index')--}}">Thêm lộ trình</a>
                <a class="collapse-item" href="{{route('admin.coachroute.list')}}">Danh sách lộ trình</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.order.list')}}">
            <i class="fas fa-users"></i>
            <span>Thông tin đặt vé</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Heading -->
    <div class="sidebar-heading">
        Cài Đặt Chung
    </div>
    <!-- Users -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.user.list')}}">
            <i class="fas fa-users"></i>
            <span>Người Dùng</span></a>
    </li>
    <!-- General settings -->
    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-cog"></i>
            <span>Cài Đặt</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
