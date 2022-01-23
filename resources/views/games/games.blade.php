@extends('layouts2.master')
@section('title')
الالعاب
@stop
<link rel="icon" href="{{URL::asset('assets/img/brand/favicon.png')}}" type="image/x-icon" />

@section('css')
<!-- Internal Data table css -->
<link rel="stylesheet" href="{{ URL::asset('assets games/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets games/css/animate.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets games/css/all.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets games/css/jquery-ui.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets games/css/style.css')}}">


@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="loader">
	<span class="load"></span>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<div class="panner-top">
	<div class="carousel-pic" style="background: url('assets games/images/headerbackgound.png')">
		<div class="panner-layer">
			<h1>GAMERS</h1>
			<h1>DOJO</h1>
		</div>
	</div>
</div>
<section class="games mt-5 mb-5">
	<div class="container overflow-hidden">
		@foreach ($img as $imgs)
		<div class="game-card mt-4 mb-4 fadeRight">
			<img src="{{asset('images/games/'.$imgs->photo)}}" alt="">
			<div class="card-info fortnite">
				<h4>عنوان النص</h4>
				<p>
					{{$imgs->title}}
				</p>
				<a href="{{ url('/' . ($page = 'game_details')) }}/{{$imgs->id}}" class="show-btn defultlink"><span>عرض اللعبة</span></a>
			</div>
		</div>
		@endforeach
		<!-- <div class="game-card mt-4 mb-4 fadeRight">
			<img src="assets games/images/fifa21.png" alt="">
			<div class="card-info fifa">
				<h4>عنوان النص</h4>
				<p>
					هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
				</p>
				<a href="{{ url('/' . ($page = 'game_details')) }}" class="show-btn defultlink"><span>عرض اللعبة</span></a>
			</div>
		</div>
		<div class="game-card mt-4 mb-4 fadeRight">
			<img src="assets games/images/rocket.png" alt="">
			<div class="card-info rocket">
				<h4>عنوان النص</h4>
				<p>
					هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
				</p>
				<a href="{{ url('/' . ($page = 'game_details')) }}" class="show-btn defultlink"><span>عرض اللعبة</span></a>
			</div>
		</div>
		<div class="game-card mt-4 mb-4 fadeRight">
			<img src="assets games/images/clash.png" alt="">
			<div class="card-info clash">
				<h4>عنوان النص</h4>
				<p>
					هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
				</p>
				<a href="{{ url('/' . ($page = 'game_details')) }}" class="show-btn defultlink"><span>عرض اللعبة</span></a>
			</div>
		</div> -->
	</div>
</section>


@endsection






<!--search modal -->
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<form class="modal-content search-head">
			<label class="w-100"><input placeholder="ادخل نص بحثك" type="text"></label>
			<button class="btn" type="submit">بحث</button>
		</form>
	</div>
</div>
@section('js')
<!--end search modal -->
<<!--end search modal -->
	<script src="{{ URL::asset('assets games/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{ URL::asset('assets games/js/popper.min.js')}}"></script>
	<script src="{{ URL::asset('assets games/js/bootstrap.min.js')}}"></script>
	<script src="{{ URL::asset('assets games/js/jquery-ui.js')}}"></script>
	@yield('js')
	<script src="{{ URL::asset('assets games/js/wow.min.js')}}"></script>
	<script src="{{ URL::asset('assets games/js/main.js')}}"></script>
	<script type="text/javascript">
		new WOW().init();
	</script>
	@endsection