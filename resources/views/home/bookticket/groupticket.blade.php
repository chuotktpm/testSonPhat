@extends('home.layouts.master')
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('title','SON PHAT || ĐẶT VÉ NHÓM')
@section('main-content')
<div class="container">
    <div class="content">	
        <div class="row">
            @for ($i=2;$i<=8; $i++)
                <div class="col-md-2">
                    <div class="grid">
                        <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
                            <div class="portfolio-wrapper">		
                                <a href="{{ route('inputform', ['count'=>$i]) }}">
                                    <img src="{{asset('frontend/images/images.png')}}" height="200px" width="200px" style="border-radius: 20px"/><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "></h2>
                                    </div></a>
                            </div>
                        </div>
                        <h2 class="text-center">{{$i}} người</h2>
                        <p class="text-center"><a href="{{ route('inputform', ['count'=>$i]) }}">Đặt</a></p>
                    </div>
                </div>
            @endfor
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
@endsection
