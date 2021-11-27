<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Đăng ký</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->	
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/util.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/main.css')}}">
    <!--===============================================================================================-->
    </head>
    <body>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="{{asset('frontend/images/img-01.png')}}" alt="IMG">
                    </div>
    
                    <form class="login100-form validate-form" action="{{ route('user.register.submit') }}" method="POST">
                        @csrf
                        <span class="login100-form-title">
                            ĐĂNG KÝ THÀNH VIÊN
                        </span>

                        <div class="wrap-input100 validate-input" data-validate = "Vui lòng nhập họ tên!">
                            <input class="input100" type="text" name="name" placeholder="Tên" value="{{old('name')}}">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </div>
                        @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
    
                        <div class="wrap-input100 validate-input" data-validate = "Email phải là định dạng: ex@abc.xyz">
                            <input class="input100" type="text" name="email" placeholder="Email" value="{{old('email')}}">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>
                        @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror

                        <div class="wrap-input100 validate-input" data-validate = "Vui lòng nhập mật khẩu">
                            <input class="input100" type="password" name="password" placeholder="Mật khẩu" value="{{old('password')}}">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        @error('password')
                                <span class="text-danger">{{$message}}</span>
                            @enderror

                        <div class="wrap-input100 validate-input" data-validate = "Vui lòng xác nhận mật khẩu">
                            <input class="input100" type="password" name="password_confirmation" placeholder="Xác nhận mật khẩu" value="{{old('password_confirmation')}}">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        @error('password_confirmation')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Đăng ký
                            </button>
                        </div>
    
                        <div class="text-center p-t-136">
                            <a class="txt2" href="{{ route('user.login.form') }}">
                                <i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
                                Quay lại đăng nhập
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    <!--===============================================================================================-->	
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/tilt/tilt.jquery.min.js"></script>
        <script >
            $('.js-tilt').tilt({
                scale: 1.1
            })
        </script>
    <!--===============================================================================================-->
        <script src="js/main.js"></script>
    </body>
</html>
