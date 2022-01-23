@extends('layouts2.master')
@section('title')
كن مدربا
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
<section class="join-us">
	<div class="container overflow-hidden">
		<div class="joinUsForm pt-5 fadedown2">
			<h3 style="color: #fff" class="normal-title">كن مدربا لدينا</h3>
			<form class="row justify-content-center align-items-center flex-column pt-4 pb-5" action="{{route('coaches.store','test')}}" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
				<label class="col-md-8 col-12 mt-2 mb-2">
					الأسم
					<input class="joinInput" type="text" name="name">
				</label>
				<label class="col-md-8 col-12 mt-2 mb-2">
					رقم الجوال
					<input class="joinInput" type="number" name="phone">
				</label>
				<label class="col-md-8 col-12 mt-2 mb-2">
					ألبريد الإلكتروني
					<input class="joinInput" type="email" name="email">
				</label>

				<label class="col-md-8 col-12 mt-2 mb-2">
					رقم الحساب البنكي
					<input class="joinInput" type="number" name="Bank account number">
				</label>
				<label class="col-md-8 col-12 mt-2 mb-2">
					تاريخ الميلاد
					<input class="joinInput" type="date" name="Date of Birth">
				</label>
				<label class="col-md-8 col-12 mt-2 mb-2">
					المدينة
					<input class="joinInput" type="text" name="City">
				</label>
				<label class="col-md-8 col-12 mt-2 mb-2">
					الوصف
					<input class="joinInput" type="text" name="description">
				</label>
				<label class="col-md-8 col-12 mt-2 mb-2">
					الصوره
					<input class="joinInput" type="file" name="photo">
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