@extends('layouts.front')

@section('content')
	<div class="swiper-container">
		<div class="swiper-wrapper">
            <div class="swiper-slide"><img src="https://htcc.fendous.cn/uploads/{{$list->giftGoodsImage->giftGoodsImage[0]->file_name}}"></div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
	<div class="discript">
		<h1>{{$list->goods_name}}</h1>
		<span class="price">￥{{$list->getGoodsSpec->goods_price}}元</span>
		<span>(商品单位：元)</span>
	</div>
	<div class="disinfo-title">产品说明:<img src="{{ asset('images/return2.png') }}"></div>

	<div class="disinfo-del">
		<p>{{$list->goods_name}}</p>

		{!! html_entity_decode($list->content) !!}

		{{--		@foreach($list->giftGoodsImage->giftGoodsImage as $imageVal)
			<img src="https://htcc.fendous.cn/uploads/{{$imageVal->file_name}}">
		@endforeach--}}
	</div>

{{--	<div class="samepro">
		<p>相关产品</p>
		<ul>
			<li>
				<a href="{{ url("front/index?a=prodel") }}"><img src="{{ asset('images/pic02.jpg') }}"></a>
				<a class="urlfont" href="{{ url("front/index?a=prodel") }}">创意大鸡腿毛绒玩具睡觉抱枕靠垫</a>
			</li>
			<li>
				<a href="{{ url("front/index?a=prodel") }}"><img src="{{ asset('images/pic04.jpg') }}"></a>
				<a class="urlfont" href="{{ url("front/index?a=prodel") }}">动物睡觉抱枕 枕头 70cm长抱枕毛绒玩具</a>
			</li>
			<li>
				<a href="{{ url("front/index?a=prodel") }}"><img src="{{ asset('images/pic06.jpg') }}"></a>
				<a class="urlfont" href="{{ url("front/index?a=prodel") }}">背影猫抱枕猫咪咖啡厅办公室沙发大号靠垫</a>
			</li>
		</ul>
	</div>--}}
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        autoplay : 5000
    });
</script>
@endsection