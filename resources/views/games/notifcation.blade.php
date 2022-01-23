@extends('layouts2.master')
@section('title')
الاشعارات
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
<section class="mt-4 mb-4">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a class="defultlink" href="Account.html">الرئيسية</a></li>
				<li class="breadcrumb-item active" aria-current="page">الأشعارات</li>
			</ol>
		</nav>
		@foreach (auth()->user()->unreadNotifications as $notification)
		<div class="row transaction">
			<div class="col-12">
				<div class="transaction-card">
					<h5 class="bell mr-3 ml-3"><img src="assets games/images/bell.png" alt=""></h5>
					<div class="d-flex flex-column">
						<h6 class="mt-2 mb-2"><b> {{ $notification->data['title'] }}</b></h6>
						<h6 class="mt-2 mb-2"><b><span>{{ $notification->data['user'] }}</span></b></h6>
						<h6 class="mt-2 mb-2"><b><span>{{ $notification->created_at }}</span></b></h6>
					</div>
				</div>
			</div>
		</div>
		@endforeach
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