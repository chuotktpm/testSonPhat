<!----start-container----->
<div class="header-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="logo"><a href="{{ route('home') }}"><img src="{{asset('img/purepng.com-white-busbusvehiclecarrying-passengerslarge-motor-vehiclecoachminibus-1701528460765uflu7.png')}}" alt="" height="100px" width="140px"/></a></div>
            </div>
            <div class="col-md-8">					
                 <nav class="navbar navbar-default" role="navigation">
                  <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header"><span class="text-left"><a href="#">MENU</a></span>
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>						   
                    </div>					
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                           <li>
                         <div class="btn-group show-on-hover">
                              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                Đặt vé<span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('inputform') }}">Đặt vé</a></li>
                                <li><a href="{{ route('groupTicket') }}">Đặt vé nhóm</a></li>
                              </ul>
                            </div>						          
                        </li>
                        <li><a href="">Hướng dẫn</a></li>
                        <li><a href="">Liên hệ</a></li>
                      </ul>							      					    					      
                    </div>
					<!-- /.navbar-collapse -->
                  </div>
				  <!-- /.container-fluid -->
                </nav>
                <div class="right">
                    <ul class="list-unstyled">
						@if (Auth::check())
							<li class="name-user">
								{{-- Show name --}}
								@if (Auth::user()->role == 'admin')
									<a href="{{ route('admin.dashboard')}}">{{Auth::user()->name}}</a>
								@else
									<a href="{{ route('user.dashboard')}}">{{Auth::user()->name}}</a>
								@endif
									
							</li>
							<li>
								<a class="dropdown-item" href=""
									onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> {{ __('Đăng xuất') }}
								</a>
								<form id="logout-form" action="{{ route('user.logout') }}" method="GET" style="display: none;">
									@csrf
								</form>
							</li>
						@else
							<li>
								<a class="dropdown-item" href=""
								onclick="event.preventDefault();
												document.getElementById('login-form').submit();">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> {{ __('Đăng nhập') }}
								</a>
								<form id="login-form" action="{{ route('user.login.form') }}" method="GET" style="display: none;">
									@csrf
								</form>
							</li>
              <li>
								<a class="dropdown-item" href=""
								onclick="event.preventDefault();
												document.getElementById('register-form').submit();">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> {{ __('Đăng ký') }}
								</a>
								<form id="register-form" action="{{ route('user.register.form') }}" method="GET" style="display: none;">
									@csrf
								</form>
							</li>
						@endif
                    </ul>							
                </div>	
            </div>
            <!----start-images-slider---->	
          <!-- Single button -->

        </div>
    </div>
</div>	
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
   <!----start-images-slider---->
<div class="images-slider">
    <div id="fwslider">
        <div class="slider_container">
            <div class="slide"> 
                    <img src="{{asset('frontend/images/1431600.jpg')}}" alt=""/>
                <div class="slide_content">
                    <div class="slide_content_wrap">
                         <p class="description">Kết nối mọi người</p>
                        <h4 class="title">An toàn & sang trọng</h4>	
                         <p class="description"><a href="{{ route('groupTicket') }}">Đặt vé nhóm</a></p>	                      
                        <div class="slide-btns description">		            	                      
                        </div>
                    </div>
                </div>
            </div>		        
            <div class="slide">
                <img src="{{asset('frontend/images/img.jpg')}}" alt=""/>
                <div class="slide_content">
                     <div class="slide_content_wrap">		                   
                         <p class="description">Nâng niu bàn chân Việt</p>
                        <h4 class="title">Thượng Lộ & Bình An</h4>	 
                         <p class="description"><a href="{{ route('inputform') }}">Đặt vé</a></p>
                        <div class="slide-btns description">		                      
                        </div>
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"> </div>
        <div class="slidePrev"><span> </span></div>
        <div class="slideNext"><span> </span></div>
    </div>
    <!--/slider -->
</div>
</div>
</div>
</div>
<!----//End-container----->