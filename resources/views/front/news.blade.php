@extends('layouts.front')

@section('content')
	<div class="newsbox">
		<h3>门店动态</h3>
		<ul>
			<li>
				<a class="newwrap" href="#">
					<span>
						由于疫情原因暂时歇业
						<br>
						(具体开业时间为:2020年02月16日)
					</span>
					<em>发布时间: {{\Carbon\Carbon::now()->toDateString()}}</em>
				</a>
			</li>
		</ul>
	</div>
@endsection