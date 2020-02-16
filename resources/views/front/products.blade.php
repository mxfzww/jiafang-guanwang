@extends('layouts.front')

@section('content')
<div class="procenter">
	<h3>产品中心</h3>
	<div class="waterfall">
	<ul class="prolists">
		@foreach($list as $product)
			<li>
				<a href="{{ url("front/index?a=prodel&goods_id={$product->goods_id}") }}"><img src="https://htcc.fendous.cn/uploads/{{$product->giftGoodsImage->giftGoodsImage[0]->file_name}}"></a>
				<a class="urlfont" href="{{ url("front/index?a=prodel&goods_id={$product->goods_id}") }}">{{$product->goods_name}}</a>
			</li>
		@endforeach
	</ul>
	</div>
</div>
@endsection