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
    <!-- banner图结束 -->
    <ul class="navlist">
        <li><a href="{{ url("front/index?a=products") }}"><img src="{{ asset('images/icon/icon01.png') }}"><span>产品中心</span></a></li>
        <li><a href="{{ url("front/index?a=about") }}"><img src="{{ asset('images/icon/icon02.png') }}"><span>关于我们</span></a></li>
        <li><a href="{{ url("front/index?a=news") }}"><img src="{{ asset('images/icon/icon03.png') }}"><span>门店动态</span></a></li>
        <li><a href="{{ url("front/index?a=contact") }}"><img src="{{ asset('images/icon/icon04.png') }}"><span>联系我们</span></a></li>
    </ul>

    <div class="prospecl">
        <h2>产品特性</h2>
        <div class="short-line"><span></span></div>
        <ul class="protips">
            <li><img src="{{ asset('images/icon/ic01.png') }}"><span>健康舒适</span></li>
            <li><img src="{{ asset('images/icon/ic02.png') }}"><span>亲肤贴身</span></li>
            <li><img src="{{ asset('images/icon/ic03.png') }}"><span>柔软舒爽感</span></li>
            <li><img src="{{ asset('images/icon/ic04.png') }}"><span>超高性价比</span></li>
            <li><img src="{{ asset('images/icon/ic05.png') }}"><span>不缩水不褪色</span></li>
            <li><img src="{{ asset('images/icon/ic06.png') }}"><span>售后有保障</span></li>
        </ul>
    </div>
    <div class="prospecl">
        <h2>推荐产品</h2>
        <div class="short-line"><span></span></div>

        @foreach($list as $product)
            <dl>
                <dt><a href="{{ url("front/index?a=prodel&goods_id={$product->goods_id}") }}"><img src="https://htcc.fendous.cn/uploads/{{$product->giftGoodsImage->giftGoodsImage[0]->file_name}}"></a></dt>
                <dd><a href="{{ url("front/index?a=prodel&goods_id={$product->goods_id}") }}">{{$product->goods_name}}</a></dd>
            </dl>
        @endforeach

        <div class="center"><a class="viewmore" href="{{ url("front/index?a=products") }}"><span class="butText">更多产品 &gt;</span></a></div>
    </div>
    <div class="prospecl">
        <h2>门店动态</h2>
        <div class="short-line"><span></span></div>
        <ul class="news_view">
            <li>
                <a href="#">
                    <div class="pic"><img src="{{ asset('images/3052719_1003550.jpg') }}"></div>
                    <div class="proAttr">
                        <h3>由于疫情原因暂时歇业</h3>
                        <p class="proIntro textfont">具体开业时间为:2020年02月16日</p>
                    </div>
                </a>
            </li>
        </ul>
        <div class="center"><a class="viewmore" href="{{ url("front/index?a=news") }}"><span class="butText">更多动态 &gt;</span></a></div>
    </div>
    <div class="bottom">
        <p>
            Copyright&nbsp;©&nbsp;2017 <a href="javascript:" title="布艺家纺">布艺家纺</a> &nbsp;&nbsp;版权所有
        </p>
    </div>
    <!-- 遮罩 -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            autoplay : 5000
        });
    </script>
@endsection
