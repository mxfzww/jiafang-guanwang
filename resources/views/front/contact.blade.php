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
       <div class="contact-box">
       		<h3>网站地图</h3>
	        <div class="short-line"><span></span></div>
       		<div style="width:95%; margin:10px auto; height:280px; clear:both" id="myMap">
    			<iframe id="geoPage" width="100%" height="100%" frameborder="0" scrolling="no" src="http://apis.map.qq.com/tools/poimarker?type=0&amp;marker=coord:35.941698,115.395619;coordtype:3;title:布艺家纺;addr:山东莘县观城镇第三人民医院路西&amp;key=RMRBZ-Y7U35-MO4IE-Q6VHG-IKZ4H-CYB65&amp;referer=myapp"></iframe>
			</div>
	       	<h3>联系方式</h3>
	        <div class="short-line"><span></span></div>
	        <ul>
	        	<li>
					<dl>
						<dt><img src="{{ asset('images/icon/tact02.png') }}"></dt>
						<dd class="font">联系电话</dd>
						<dd><a href="tel:15266877142">15266877142</a></dd>
					</dl>
	        	</li>
	        	<li>
					<dl>
						<dt><img src="{{ asset('images/icon/tact01.png') }}"></dt>
						<dd class="font">店铺邮箱</dd>
						<dd><a href="tel:15266877142">2426595849@qq.com</a></dd>
					</dl>
	        	</li>
	        	<li>
					<dl>
						<dt><img src="{{ asset('images/icon/tact03.png') }}"></dt>
						<dd class="font">店铺传真</dd>
						<dd>0755-2541234</dd>
					</dl>
	        	</li>
	        	<li>
					<dl>
						<dt><img src="{{ asset('images/icon/tact04.png') }}"></dt>
						<dd class="font">店铺地址</dd>
						<dd>山东莘县观城镇第三人民医院路西</dd>
					</dl>
	        	</li>
	        </ul>
       </div>
       <div class="bottom">
            <p>
                Copyright&nbsp;©&nbsp;2017 <a href="javascript:" title="布艺家纺">布艺家纺</a> &nbsp;&nbsp;版权所有
            </p>
        </div>
	@endsection
