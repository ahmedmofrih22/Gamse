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
			<h1>المفضله</h1>

		</div>
	</div>
</div>
<section class="trainer-cards mt-5 mb-5">
	<div class="container">
		<div class="row">
			@foreach ($coach as $coachs)
			<div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-3 overflow-hidden">
				<div class="couchCard pt-0 fadeRight">
					<img src="{{asset('images/coaches/'.$coachs->photo)}}" alt="couch">
					<h6><b>{{$coachs->name}}</b></h6>
					<h6 class="game"><b>FIFA21</b></h6>
					<h6 class="game"><b>PES 21</b></h6>
					<div class="couchInfo">
						<h6><i style="color: #FFD700" class="fas fa-star">0.5</i> (4)</h6>
						<h6><span>150</span> ر.س</h6>
					</div>
					<a href="{{ url('/' . $page='Couch_profile') }}" class="show-btn defultlink"><span>عرض الملف</span></a>
				</div>
			</div>
			@endforeach

			<!-- <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-3 overflow-hidden">
				<div class="couchCard pt-0 fadeRight">
					<img src="assets games/images/4284.jpg" alt="couch">
					<h6><b>اسم المدرب</b></h6>
					<h6 class="game"><b>FIFA21</b></h6>
					<h6 class="game"><b>PES 21</b></h6>
					<div class="couchInfo">
						<h6><i style="color: #FFD700" class="fas fa-star">0.5</i> (4)</h6>
						<h6><span>150</span> ر.س</h6>
					</div>
					<a href="{{ url('/' . $page='Couch_profile') }}" class="show-btn defultlink"><span>عرض الملف</span></a>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-3 overflow-hidden">
				<div class="couchCard pt-0 fadeRight">
					<img src="assets games/images/4284.jpg" alt="couch">
					<h6><b>اسم المدرب</b></h6>
					<h6 class="game"><b>FIFA21</b></h6>
					<h6 class="game"><b>PES 21</b></h6>
					<div class="couchInfo">
						<h6><i style="color: #FFD700" class="fas fa-star">0.5</i> (4)</h6>
						<h6><span>150</span> ر.س</h6>
					</div>
					<a href="{{ url('/' . $page='Couch_profile') }}" class="show-btn defultlink"><span>عرض الملف</span></a>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-3 overflow-hidden">
				<div class="couchCard pt-0 fadeRight">
					<img src="assets games/images/4284.jpg" alt="couch">
					<h6><b>اسم المدرب</b></h6>
					<h6 class="game"><b>FIFA21</b></h6>
					<h6 class="game"><b>PES 21</b></h6>
					<div class="couchInfo">
						<h6><i style="color: #FFD700" class="fas fa-star">5.0</i> (4)</h6>
						<h6><span>150</span> ر.س</h6>
					</div>
					<a href="{{ url('/' . $page='Couch_profile') }}" class="show-btn defultlink"><span>عرض الملف</span></a>
				</div>
			</div> -->
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