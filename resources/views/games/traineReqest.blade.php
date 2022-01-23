@extends('layouts2.master')
@section('title')
طلب التدريب
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
<section class="about mt-5 mb-5 overflow-hidden">
	<div class="container fadedown2">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a class="defultlink" href="Account.html">الرئيسية</a></li>
				<li class="breadcrumb-item active" aria-current="page">طلب التدريب</li>
			</ol>
		</nav>
		<div class="txt-list">
			<div class="txtp">
				<p><b>هذا النص هو مثال لنص يمكن ان يستبدل بنص اخر في نفس المساحة تم توليد هذا النص من مولد النص العربي</b></p>
				<p><b>هذا النص هو مثال لنص يمكن ان يستبدل بنص اخر في نفس المساحة تم توليد هذا النص من مولد النص العربي</b></p>
				<p><b>هذا النص هو مثال لنص يمكن ان يستبدل بنص اخر في نفس المساحة تم توليد هذا النص من مولد النص العربي</b></p>
				<p><b>هذا النص هو مثال لنص يمكن ان يستبدل بنص اخر في نفس المساحة تم توليد هذا النص من مولد النص العربي</b></p>
				<p><b>هذا النص هو مثال لنص يمكن ان يستبدل بنص اخر في نفس المساحة تم توليد هذا النص من مولد النص العربي</b></p>
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