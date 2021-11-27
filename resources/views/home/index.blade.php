@extends('home.layouts.master')
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('title','SON PHAT || TRANG CHỦ')
@section('main-content')

<div class="container">
<div class="content">	
<div class="row">
<div class="col-md-12 text-center">
 <h2>Các tuyến xe khách phổ biến</h2>
</div>	
</div>	
<div class="row">
        <div class="col-md-2">
            <div class="grid">
                <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper">		
                        <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
                         <img src="{{asset('frontend/images/cont1.jpg')}}" height="200px" width="200px" style="border-radius: 20px"/><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="{{asset('frontend/images/link-ico.png')}}" alt=""/></h2>
                          </div></a>
                    </div>
                </div>		
                <p class="text-center">Thái Nguyên - Thái Bình</p>
                <h2 class="text-center">24 chỗ</h2>
                <p class="text-center"><a href="">Xem</a></p>
            </div>
        </div>
        
        <!----start-model-box---->
                <a data-toggle="modal" data-target=".bs-example-modal-md" href="#"> </a>
                <div class="modal fade bs-example-modal-md light-box" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-md">
                    <div class="modal-content light-box-info">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="{{asset('frontend/images/close.png')}}" title="close" /></button>
                        <h3>XE KHÁCH THANH THỦY - THÁI NGUYÊN</h3>
                        <p>Tuyến: Thái Nguyên - Thái Bình</p>
                        <p>SĐT: 0982003629</p>
                        <p>Xe có 35 chỗ ngồi, có điều hòa</p>
                        <p>Xe di chuyển 2 chuyến/ngày</p>
                        <p>Giờ đi: 8:00</p>
                        <p>Giờ đến: 13:00</p>
                    </div>
                  </div>
                </div>
                <!----start-model-box---->
        
        <div class="col-md-2">
            <div class="grid">
                <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper">		
                        <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
                         <img src="{{asset('frontend/images/cont2.jpg')}}"  height="200px" width="200px" style="border-radius: 20px"/><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="{{asset('frontend/images/link-ico.png')}}" alt=""/></h2>
                          </div></a>
                    </div>
                </div>		
                <p class="text-center">Thái Nguyên - Hà Nội</p>
                <h2 class="text-center">24 chỗ</h2>
                <p class="text-center"><a href="">Xem</a></p>
            </div>
        </div>
        <div class="col-md-2">
            <div class="grid">
                <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper">		
                        <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
                         <img src="{{asset('frontend/images/cont3.jpg')}}" height="200px" width="200px" style="border-radius: 20px"/><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="{{asset('frontend/images/link-ico.png')}}" alt=""/></h2>
                          </div></a>
                    </div>
                </div>		
                    <p class="text-center">Thái Nguyên - Bắc Giang</p>
                    <h2 class="text-center">24 chỗ</h2>
                    <p class="text-center"><a href="">Xem</a></p>
            </div>
        </div>
        <div class="col-md-2">
            <div class="grid">
                <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper">		
                        <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
                         <img src="{{asset('frontend/images/cont4.jpg')}}" height="200px" width="200px" style="border-radius: 20px"/><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="{{asset('frontend/images/link-ico.png')}}" alt=""/></h2>
                          </div></a>
                    </div>
                    <p class="text-center">Bắc Giang - Hà Nội</p>
                    <h2 class="text-center">24 chỗ</h2>
                    <p class="text-center"><a href="">Xem</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="grid">
                <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper">		
                        <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
                         <img src="{{asset('frontend/images/cont2.jpg')}}" height="200px" width="200px" style="border-radius: 20px"/><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="{{asset('frontend/images/link-ico.png')}}" alt=""/></h2>
                          </div></a>
                    </div>
                </div>					  	
                <p class="text-center">Thái Nguyên - Cao Bằng</p>
                <h2 class="text-center">24 chỗ</h2>
                <p class="text-center"><a href="">Xem</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
</div>
<div class="clearfix"></div>
</div>
<div class="top">
<div class="row">
            <div class="col-md-4">
                <div class="grid">
                    <h2>Nền tảng đặt xe Sơn Phát</h2>
                    <p>Cung cấp hàng trăm nhà xe và hàng ngàn tuyến đường, thanh toán linh hoạt và tiện lợi. Cập nhật các nhà xe mới mỗi ngày</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="grid">
                    <h2>Tại sao chọn chúng tôi</h2>
                    <p>Bất cứ khi nào bạn cần đi xe khách - Chúng tôi luôn sẵn sàng phục vụ đặt vé giúp bạn! Chúng tôi sẽ cung cấp thông tin, lịch trình của nhà xe và hướng dẫn để đặt vé. Khách hàng luôn là thượng đế. Mạng lưới nhà xe Hơn 1000 nhà xe và bến xe khắp Việt Nam. Hãng xe Thành Bưởi, Hãng xe Văn Minh, Hãng xe Hoàng Long,..vv.. và hàng chục Bến xe trên toàn quốc. Bạn sẽ dễ dàng trong việc lựa chọn nhà xe và đặt vé.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="grid1 pull-left">
                    <h2>Liên hệ</h2>
                    <address>
                        <p>Địa chỉ: Bến Xe Thái Nguyên, Thành phố Thái Nguyên</p>
                        <p>Hotline: 1900-0000</p>
                    </address>
                </div>
                <div class="grid2 pull-right">
                    <div class="social-icons-set">
                            <ul>
                                <li><a class="facebook" href="#"> </a></li>
                                <li><a class="twitter" href="#"> </a></li>
                                <li><a class="vimeo" href="#"> </a></li>								
                                <div class="clear"> </div>
                            </ul>
                        </div>
                </div>
            </div>
            <div class="clearfix"></div>
</div>
</div>
</div>
@endsection
