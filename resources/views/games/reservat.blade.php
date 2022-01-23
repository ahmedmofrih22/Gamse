@extends('layouts2.master')
@section('title')
الحجز
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

<section class="mt-4 mb-4 overflow-hidden">
	<div class="container fadedown2">
		<div class="row">
			<div class="col-12">
				<h5>سداد الحجز</h5>
			</div>
			<div class="col-lg-8 col-md-6 col-12 mb-4">
				<form class="row reserved-form form-col">
					<label class="col-12 mt-3">
						<input type="text" placeholder="الاسم علي البطاقة">
					</label>
					<label class="col-12 mt-3">
						<input type="text" placeholder="رقم البطاقة">
					</label>
					<label class="col-md-6 col-12 mt-3">
						<input id="datepicker" type="text" placeholder="تاريخ الانتهاء">
					</label>
					<label class="col-md-6 col-12 mt-3">
						<input type="number" placeholder="CVV">
					</label>
					<div class="col-12 d-flex justify-content-end">
						<button class="show-btn defultlink mb-0 confirm"><span>تأكيد </span></button>
					</div>
				</form>
			</div>
			<div class="col-lg-4 col-md-5 col-12">
				<div class="row">
					<div class="col-12">
						<div class="couch">
							<img src="assets games/images/4284.jpg" alt="">
							<div class="d-flex flex-column align-items-end p-2">
								<h6>اسم المدرب</h6>
								<h6 style="color:rgb(214, 14 , 27)">ps4</h6>
								<h6 style="color:rgb(214, 14 , 27)">fifa2021</h6>
								<h6><i style="color: #FFD700" class="fas fa-star">0.5</i> (4)</h6>
							</div>
						</div>
					</div>
					<div class="col-12 mt-4">
						<div class="information resevat">
							<h6 class="title-box">الاساسيه</h6>
							<div class="d-lg-flex justify-content-between mt-4">
								<h6>1 ساعة تدريب</h6>
								<h6><b>150 ر.س</b></h6>
							</div>
							<h6 class="mt-3"><i class="far fa-clock mr-2 ml-2"></i> 60 يوم توصيل للخدمة</h6>
							<h6 class="mt-3"><i style="color: green" class="fas fa-check mr-2 ml-2"></i> تدريب فردي</h6>
						</div>
					</div>
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
<script src="{{ URL::asset('assets games/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{ URL::asset('assets games/js/popper.min.js')}}"></script>
<script src="{{ URL::asset('assets games/js/bootstrap.min.js')}}"></script>
@yield('js')
<script src="{{ URL::asset('assets games/js/jquery-ui.js')}}"></script>
<script src="{{ URL::asset('assets games/js/wow.min.js')}}"></script>
<script src="{{ URL::asset('assets games///cdn.jsdelivr.net/npm/sweetalert2@11')}}"></script>
<script src="{{ URL::asset('assets games/js/main.js')}}"></script>
<script type="text/javascript">
	new WOW().init();
</script>
<script>
	$(document).ready(function() {
		$(".confirm").on("click", function(e) {
			e.preventDefault();
			if (true) {
				Swal.fire({
					position: 'center',
					icon: 'success',
					title: '<h5><b>شكرا لك</b></h5>',
					text: "تم اتمام العملية بنجاح",
					showConfirmButton: false,
					timer: 1500,
				})
			} else {
				// Swal.fire({
				//     position: 'center',
				//     icon: 'error',
				//     title: '<h5><b>عفوا</b></h5>',
				//     text: "لم تتم العملية بنجاح",
				//     showConfirmButton: false,
				//     timer: 1500,
				// })
			}
		})
	})
</script>
<script>
	$(function() {
		$("#datepicker").datepicker();
	});
</script>
@endsection