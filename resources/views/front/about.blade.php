@extends('layouts.front')

@section('content')
	<div class="top"><img src="{{ asset('images/topbg.png') }}"></div>
		<div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="{{ asset('images/tmp1497923653_1452780_s.jpg') }}"></div>
                    <div class="swiper-slide"><img src="{{ asset('images/tmp1497944778_1452780_s.jpg') }}"></div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
        </div>
        <div class="about-box">
        	<h1>观城镇布艺家纺-店铺简介</h1>
        	<div class="short-line"><span></span></div>
            <p class="text textfont">
                老板娘李春平女士 具有多年纺织、衣服制作经验 得到了广大人民群众的好评 欢迎大家莅临
                <br>
                联系手机号:15266877142
            </p>
        </div>
        <div class="rongyu">
        	<h3>荣誉资质</h1>
        	<div class="short-line"><span></span></div>
        	<ul>
        		<li><img src="{{ asset('images/_8830842.jpg') }}"></li>
        		<li><img src="{{ asset('images/_9093776.png') }}"></li>
        		<li><img src="{{ asset('images/_9138852.jpg') }}"></li>
        		<li><img src="{{ asset('images/_9144080.jpg') }}"></li>
        	</ul>
        </div>
 		<div class="bottom">
            <p>
                Copyright&nbsp;©&nbsp;2017 <a href="javascript:" title="布艺家纺">布艺家纺</a> &nbsp;&nbsp;版权所有
            </p>
        </div>
	@endsection
