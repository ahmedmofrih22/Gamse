@extends('layouts2.master')
@section('title')
الرئيسيه
@stop
<link rel="icon" href="{{URL::asset('assets/img/brand/favicon.png')}}" type="image/x-icon" />

@section('css')
<!-- Internal Data table css -->

<link rel="stylesheet" href="{{ URL::asset('assets games/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets games/css/animate.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets games/css/all.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets games/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets games/css/owl.theme.default.min.css')}}">
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
<section class="second-nav">
	<div class="nav-wrapper">
		<div class="container">
			<div class="games-nav">
				<ul>
					<li><a class="defultlink" href="">كل الالعاب</a></li> |
					<li><a class="defultlink" href="">Fifa 21</a></li> |
					<li><a class="defultlink" href="">Clash Royal</a></li> |
					<li><a class="defultlink" href="">Fortnite</a></li> |
					<li><a class="defultlink" href="">Call Of Duty</a></li> |
					<li><a class="defultlink" href="">Pes 21</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section class="how mt-5 mb-4">
	<div class="container">
		<div class="toWork">
			<h2 class="normal-title">كيف يعمل</h2>
			<div class="work-steps">
				<div class="d-flex flex-column align-items-center">
					<h3 class="step">1</h3>
					<h3 class="">اختر لعبتك المفضلة</h3>
				</div>
				<div class="d-flex flex-column align-items-center">
					<h3 class="step">2</h3>
					<h3 class="">اختر مدربك</h3>
				</div>
				<div class="d-flex flex-column align-items-center">
					<h3 class="step">3</h3>
					<h3 class="">عرف اهدافك</h3>
				</div>
				<div class="d-flex flex-column align-items-center">
					<h3 class="step">4</h3>
					<h3 class="">استمتع بالتعلم</h3>
				</div>
			</div>
		</div>
		<div class="panner-toWork mt-4 mb-4">
			<div class="addCarousel">
				<div class="owl-carousel owl-theme">
					<div class="item">
						<img src="assets games/images/banner.png" alt="">
					</div>
					<div class="item">
						<img src="assets games/images/banner.png" alt="">
					</div>
					<div class="item">
						<img src="assets games/images/banner.png" alt="">
					</div>
					<div class="item">
						<img src="assets games/images/banner.png" alt="">
					</div>
				</div>
			</div>
			<h4 class="normal-title mt-4">هذا النص هو مثال لنص يستبدل في نفس المساحة</h4>
		</div>
	</div>
</section>
<section class="games-carousel">
	<div class="owl-carousel owl-theme">
		@foreach ($img as $imgs)
		<div class="item">
			<div class="game-card">

				<img src="{{asset('images/games/'.$imgs->photo)}}" alt="">
				<div class="card-info fortnite">
					<h4>عنوان النص</h4>

					<p>
						{{$imgs->title}}
					</p>

					<a href="{{ url('/' . ($page = 'game_details')) }}/{{$imgs->id}}" class="show-btn defultlink"><span>عرض اللعبة</span></a>
				</div>
			</div>
		</div>
		@endforeach
		<!-- <div class="item">
			<div class="game-card">
				<img src="assets games/images/fifa21.png" alt="">
				<div class="card-info fifa">
					<h4>عنوان النص</h4>
					<p>
						هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
					</p>
					<a href="{{ url('/' . ($page = 'game_details')) }}" class="show-btn defultlink"><span>عرض اللعبة</span></a>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="game-card">
				<img src="assets games/images/rocket.png" alt="">
				<div class="card-info rocket">
					<h4>عنوان النص</h4>
					<p>
						هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
					</p>
					<a href="{{ url('/' . ($page = 'game_details')) }}" class="show-btn defultlink"><span>عرض اللعبة</span></a>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="game-card">
				<img src="assets games/images/clash.png" alt="">
				<div class="card-info clash">
					<h4>عنوان النص</h4>
					<p>
						هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
					</p>
					<a href="{{ url('/' . ($page = 'game_details')) }}" class="show-btn defultlink"><span>عرض اللعبة</span></a>
				</div>
			</div>
		</div> -->
	</div>
</section>
<section class="join-us">
	<div class="container">
		<div class="joinUsForm pt-5">
			<h3 style="color: #fff" class="normal-title">إنضم الينا الان</h3>
			<form class="row justify-content-center align-items-center flex-column pt-4 pb-5" action="{{route('users.store','test')}}" method="post">
				{{csrf_field()}}
				<label class="col-md-8 col-12 mt-2 mb-2">
					الأسم
					<input class="joinInput" type="text" name="name">
				</label>
				<label class="col-md-8 col-12 mt-2 mb-2">
					ألبريد الإلكتروني
					<input class="joinInput" type="email" name="email">
				</label>
				<label class="col-md-8 col-12 mt-2 mb-2">
					رقم الجوال
					<input class="joinInput" type="number" name="phone">
				</label>
				<label class="col-md-8 col-12 mt-2 mb-2">
					كلمة المرور
					<input class="joinInput" type="password" name="password">
				</label>
				<label class="col-md-8 col-12 mt-2 mb-2">
					تأكيد كلمة المرور
					<input class="joinInput" type="password" name="confirm-password">
				</label>
				<label class="col-md-8 col-12 mt-2 mb-2 position-relative d-flex align-items-center">
					<input class="joinCheck" type="checkbox">
					<span class="customCheck"><i class="fas fa-check"></i></span>
					<span class="terms">قرأت و وافقت علي <a href="">الشروط والأحكام</a></span>
				</label>

				<div class="col-8 d-flex justify-content-end">
					<button class="btn send-btn btn-effect" type="submit">تسجيل</button>
				</div>
			</form>
		</div>
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
<script src="{{ URL::asset('assets games/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{ URL::asset('assets games/js/popper.min.js')}}"></script>
<script src="{{ URL::asset('assets games/js/bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('assets games/js/wow.min.js')}}"></script>
@yield('js')
<script src="{{ URL::asset('assets games/js/owl.carousel.min.js')}}"></script>
<script src="{{ URL::asset('assets games/js/main.js')}}"></script>
<script type="text/javascript">
	new WOW().init();
</script>
<script>
	$('.games-carousel .owl-carousel').owlCarousel({
		rtl: true,
		// loop:true,
		nav: true,
		// dots:false,
		items: 1,
		autoplay: true,
		smartSpeed: 1000,
	});
	$('.addCarousel .owl-carousel').owlCarousel({
		rtl: true,
		loop: true,
		nav: false,
		dots: false,
		items: 1,
		autoplay: true,
		smartSpeed: 1000,
	});
	$(".games-carousel .owl-nav .owl-next span").html("<img src='assets games/images/owlNext.png' alt=''>");
	$(".games-carousel .owl-nav .owl-prev span").html("<img src='assets games/images/owlPrev.png' alt=''>");
	$owl.on('initialized.owl.carousel changed.owl.carousel resized.owl.carousel', function(e) {
		$(e.target).toggleClass('hide-owl-next', e.item.index >= e.item.count - e.page.size);
	});
</script>
<script>
	$(function() {
		$("#datepicker").datepicker();
	});
</script>
<script type="text/javascript">
	new WOW().init();
</script>
<script>
	$(document).ready(function() {
		$('select').niceSelect();
	});
</script>
@endsection