@extends('layouts2.master')
@section('title')
التسجيل
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
<section class="logging mt-5 mb-5">
	<div class="container">
		<nav>
			<div class="nav nav-tabs loginNav" id="nav-tab" role="tablist">
				<a class="defultlink login-tab one active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">تسجيل الدخول</a>
				<a class="defultlink login-tab two" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">تسجيل جديد</a>
				<span class="slider"></span>
			</div>
		</nav>
		<div class="tab-content overflow-hidden" id="nav-tabContent">
			<div class="tab-pane fadedown2 show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
				<div class="logging-form pt-5">
					<form class="row justify-content-center align-items-center flex-column pt-4 pb-5">
						<label class="col-md-8 col-12 mt-2 mb-2">
							ألبريد الإلكتروني
							<input class="joinInput" type="email">
						</label>
						<label class="col-md-8 col-12 mt-2 mb-2">
							كلمة المرور
							<input class="joinInput" type="password">
						</label>
						<div class="col-md-8 col-12">
							<div class="d-flex justify-content-end">
								<a class="forgetLink defultlink" href="forgetPassword.html">
									<h6>هل نسيت كلمة المرور ؟</h6>
								</a>
							</div>
						</div>
						<div class="col-8 d-flex justify-content-end">
							<button class="btn send-btn btn-effect">استمرار</button>
						</div>
					</form>
				</div>
			</div>
			<div class="tab-pane fadedown2" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
				<div class="logging-form pt-5">
					<form class="row justify-content-center align-items-center flex-column pt-4 pb-5">
						<label class="col-md-8 col-12 mt-2 mb-2">
							الأسم
							<input class="joinInput" type="text">
						</label>
						<label class="col-md-8 col-12 mt-2 mb-2">
							ألبريد الإلكتروني
							<input class="joinInput" type="email">
						</label>
						<label class="col-md-8 col-12 mt-2 mb-2">
							رقم الجوال
							<input class="joinInput" type="number">
						</label>
						<label class="col-md-8 col-12 mt-2 mb-2">
							كلمة المرور
							<input class="joinInput" type="password">
						</label>
						<label class="col-md-8 col-12 mt-2 mb-2">
							تأكيد كلمة المرور
							<input class="joinInput" type="password">
						</label>
						<label class="col-md-8 col-12 mt-2 mb-2 position-relative d-flex align-items-center">
							<input class="joinCheck" type="checkbox">
							<span class="customCheck"><i class="fas fa-check"></i></span>
							<span class="terms">قرأت و وافقت علي <a href="">الشروط والأحكام</a></span>
						</label>
						<div class="col-8 d-flex justify-content-end">
							<button class="btn send-btn btn-effect">تسجيل</button>
						</div>
					</form>
				</div>
			</div>
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