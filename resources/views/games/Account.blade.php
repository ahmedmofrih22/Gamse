@extends('layouts2.master')
@section('title')
حسابي
@stop
<link rel="icon" href="{{URL::asset('assets/img/brand/favicon.png')}}" type="image/x-icon" />

@section('css')
<!-- Internal Data table css -->
<link rel="stylesheet" href="{{ URL::asset('assets games/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets games/css/animate.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets games/css/all.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets games/css/jquery-ui.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets games/css/style.css')}}">
<style>
	thead {
		background-color: #505050;
		color: #fff;
	}

	.table thead th {
		border: 0;
		text-align: center;
	}

	.table td {
		border: 0;
		text-align: center;
	}
</style>
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="loader">
	<span class="load"></span>
</div>
<!-- breadcrumb -->
@endsection
@section('content')

<section class="my-account mt-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-4">
				<div class="account-tabs">
					<div class="user-img">
						<img style="width: 90px; height: 90px;border-radius: 50%;" src="{{asset('images/user/'.Auth::user()->photo)}}">


					</div>
					<div class="nav nav-tabs" id="nav-tab" role="tablist">
						<a class="defultlink nav-item nav-link active" id="nav-Account-tab" data-toggle="tab" href="#Account" role="tab" aria-controls="nav-Account" aria-selected="true">حسابي</a>
						<a class="defultlink nav-item nav-link" id="nav-subscription-tab" data-toggle="tab" href="#subscription" role="tab" aria-controls="nav-subscription" aria-selected="false">اشتراكاتي</a>
						<a class="defultlink nav-item nav-link" id="train-course-tab" data-toggle="tab" href="#train-course" role="tab" aria-controls="nav-train" aria-selected="false">إعدادات جلسة التدريب</a>
						<a class="defultlink nav-item nav-link" id="nav-reservation-tab" data-toggle="tab" href="#reservation" role="tab" aria-controls="nav-reservation" aria-selected="false">الحجوزات </a>
						<a class="defultlink nav-item nav-link" id="nav-balance-tab" data-toggle="tab" href="#balance" role="tab" aria-controls="nav-balance" aria-selected="false">ارصدتي</a>
					</div>
					<div class="logout-tab">
						<a style="color:#000;font-size:18px" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
							<i class="bx bx-log-out"></i>تسجيل خروج</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-9 col-md-8">
				<div class="Account-content">
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fadeRight show active" id="Account" role="tabpanel" aria-labelledby="nav-Account-tab">
							<form action="{{route('coaches.store','test')}}" method="post" enctype="multipart/form-data">
								{{csrf_field()}}
								<h6><b>مرحبا {{ Auth::user()->name }}</b></h6>
								<h5 class="text-center"><b>حسابي</b></h5>
								<div style="margin:20px auto;top: 0;" class="user-img">
									<div class="upload-area">

										<img style="width: 90px; height: 90px;border-radius: 80%;" src="{{asset('images/user/'.Auth::user()->photo)}}">
										<span class="remove">x</span>
									</div>
									<div class="imageUploader">
										<input type="file" name="image" id="image" accept="image/*" class="input-img">
										<i class="fas fa-pencil-alt fapen" style="    padding-top: 10px;"></i>
									</div>
								</div>
								<div class="d-flex align-items-center flex-column">
									<h6><b>{{ Auth::user()->name }}</b></h6>
									<h6 class="text-danger"> العمر :<span>{{ Auth::user()->age }} عام</span></h6>
									<h6> عضو منذ <span>1 عام</span></h6>
								</div>
								<div class="row justify-content-center mt-4 mb-4">
									<label class="col-lg-10 col-12 mb-4">

										<input class="Account-input" type="text" name="name" placeholder="اسم المستخدم">
									</label>
									<label class="col-lg-10 col-12 mb-4">

										<input class="Account-input" type="number" name="phone" placeholder="رقم الجوال">
									</label>
									<label class="col-lg-10 col-12 mb-4">

										<input class="Account-input" type="email" name="email" placeholder="البريد ألالكتروني">
									</label>

									<label class="col-lg-10 col-12 mb-4">

										<input class="Account-input" type="text" name="description" placeholder="الوصف">
									</label>
									<label class="col-lg-10 col-12 mb-4">

										<input class="js-ui-datepicker Account-input" type="date" name="Date of Birth" placeholder="MM/DD/YYYY" onfocus="(this.type='date')">
										<!-- <img src="assets games/images/calendar.png" alt="" class="calenderIco"> -->
									</label>
									<div class="col-lg-10 col-12 mb-4">
										<label style="width: 100%;" id="current">

											<input id="address" class="Account-input" type="text" name="City" placeholder="المدينة">
										</label>
										<button id="location-change" class="btn location-change" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
											<img src="assets games/images/pin.png" alt="">
										</button>
									</div>
									<div class="col-lg-10 col-12">
										<div class="collapse" id="collapseExample">
											<div class="card card-body">
												<div style="height: 300px" id='map'></div>
											</div>
										</div>
									</div>
									<label class="col-lg-10 col-12 mb-4">

										<input class="Account-input" type="number" name="Bank account number" placeholder="رقم الحساب البنكي">
									</label>
									<label class="col-lg-10 col-12 mb-4">
										<input class="Account-input" type="file" name="photo" laceholder="الصوره">

									</label>
								</div>
								<div class="d-flex align-items-center justify-content-end">
									<button class="show-btn defultlink"><span>حفظ</span></button>
								</div>
							</form>
						</div>
						<div class="tab-pane fadeRight" id="subscription" role="tabpanel" aria-labelledby="nav-subscription-tab">
							<div class="subscripe-card">
								<div class="first-info">
									<div class="d-flex flex-column">
										<h6><b>اسم الدورة</b></h6>
										<h6><b>اسم المدرب</b></h6>
										<h6><b>رقم الطلب : <span>1458</span></b></h6>
									</div>
									<div class="d-flex flex-column">
										<h6><b>تاريخ الاشتراك</b></h6>
										<h6><b>20\10\2021</b></h6>
									</div>
								</div>
								<div class="information mt-3">
									<div class="d-lg-flex justify-content-between">
										<h6><b>تفاصيل الدوره</b></h6>
										<h6><b>150 ر.س</b></h6>
									</div>
									<h6><b><i class="far fa-clock mr-2 ml-2"></i> 60 يوم توصيل للخدمة</b></h6>
									<h6><b><i style="color: green" class="fas fa-check mr-2 ml-2"></i> تدريب فردي</b></h6>
									<div class="d-flex align-items-center justify-content-between">
										<h6><b><i style="color: green" class="fas fa-check mr-2 ml-2"></i> يصل الي 60 دقيقة</b></h6>
										<h6><b>تم اكتمال التدريب</b></h6>
									</div>
									<div class="d-flex align-items-center justify-content-between">
										<h6><b> اسم الدورة</b></h6>
										<a href="reservat.html" class="show-btn defultlink mb-0" data-toggle="modal" data-target="#exampleModalCenter"><span>تقييم المدرب </span></a>
									</div>
								</div>
							</div>
							<div id="cancel-order" class="subscripe-card">
								<div class="first-info">
									<div class="d-flex flex-column">
										<h6><b>اسم الدورة</b></h6>
										<h6><b>اسم المدرب</b></h6>
										<h6><b>رقم الطلب : <span>1458</span></b></h6>
									</div>
									<div class="d-flex flex-column">
										<h6><b>تاريخ الاشتراك</b></h6>
										<h6><b>20\10\2021</b></h6>
									</div>
								</div>
								<div class="information mt-3">
									<div class="d-lg-flex justify-content-between">
										<h6><b>تفاصيل الدوره</b></h6>
										<h6><b>150 ر.س</b></h6>
									</div>
									<h6><b><i class="far fa-clock mr-2 ml-2"></i> 60 يوم توصيل للخدمة</b></h6>
									<h6><b><i style="color: green" class="fas fa-check mr-2 ml-2"></i> تدريب فردي</b></h6>
									<div class="d-flex align-items-center justify-content-between">
										<h6><b><i style="color: green" class="fas fa-check mr-2 ml-2"></i> يصل الي 60 دقيقة</b></h6>
										<h6>
											<!--<b>تم اكتمال التدريب</b>-->
										</h6>
									</div>
									<div class="d-flex align-items-center justify-content-between">
										<h6><b> اسم الدورة</b></h6>
										<button class="show-btn change-txt defultlink mb-0"><span>إلغاء الطلب </span></button>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fadeRight" id="train-course" role="tabpanel" aria-labelledby="train-course-tab">
							<form class="seasonForm p-3">
								<div class="row">
									<div class="categSelect col-lg-6 col-12">
										<select class="nice-select" name="sort" multiple>
											<option selected disabled value=""> المنصة</option>
											<option value="">ps4</option>
											<option value="">xbox</option>
											<option value="">ps5</option>
											<option value="">pc</option>
										</select>
									</div>
									<div class="categSelect col-lg-6 col-12">
										<select class="nice-select" name="sort" multiple>
											<option selected disabled value=""> اللعبه</option>
											<option value="">ps4</option>
											<option value="">xbox</option>
											<option value="">ps5</option>
											<option value="">pc</option>
										</select>
									</div>
									<label class="col-12 mb-4">
										الوصف
										<textarea class="Account-input bg-white mt-3" type="text" placeholder="الوصف"></textarea>
									</label>
									<label class="col-12 mb-4">
										مرفقات
										<input class="Account-input hedden" type="file" multiple />
										<h6 class="upload-span mt-3">
											<img class="mr-3 ml-3" src="assets games/images/upload.png" alt="">
											<p class="m-0">اضف صورة او فيديو</p>
										</h6>
									</label>
									<div class="attachments row mt-3 mb-3">
										<div class="col-lg-4 col-md-6 col-12">
											<a data-fancybox="gallery" data-type="image" href="assets games/images/fifa21.png"><img class="uploaded-attach" src="assets games/images/fifa21.png" alt=""></a>
										</div>
										<div class="cours-vid uploaded-attach col-lg-4 col-md-6 col-12">
											<img class="cours-img w-100 h-100" src="assets games/images/background.png" alt="">
											<a data-fancybox="gallery" data-type="video" href="images/SJ4000 - Short Cinematic Test Video - YouTube.mkv">
												<div class="open-vid">
													<img src="assets games/images/play-circle.png" alt="">
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="level-tabs">
									<div class="nav nav-tabs position-relative" id="nav-tab-levels" role="tablist">
										<a class="defultlink level-links one active" id="nav-basic-tab" data-toggle="tab" href="#basic" role="tab" aria-controls="nav-basic" aria-selected="true"><span class="tab-txt">الباقة الاساسية</span></a>
										<a class="defultlink level-links two" id="nav-medium-tab" data-toggle="tab" href="#medium" role="tab" aria-controls="nav-medium" aria-selected="false"><span class="tab-txt">الباقة المتوسطة</span></a>
										<a class="defultlink level-links three" id="nav-vip-tab" data-toggle="tab" href="#vip-course" role="tab" aria-controls="nav-vip" aria-selected="false"><span class="tab-txt">الباقة الممتازة</span></a>
										<span class="bg-move"></span>
									</div>
								</div>
								<div class="level-tabs-content">
									<div class="tab-content mt-4 mb-4" id="levels-tabContent">
										<div class="tab-pane fade show active" id="basic" role="tabpanel" aria-labelledby="nav-basic-tab">
											<div class="row justify-content-center">
												<label class="col-lg-9 col-12 mb-4">
													<input class="Account-input" type="number" placeholder="ادخل ساعات التدريب">
												</label>
												<label class="col-lg-9 col-12 mb-4">
													<input class="Account-input" type="number" placeholder="ادخل مدة التوصيل">
												</label>
												<label class="col-md-8 col-12 mt-2 mb-2 position-relative d-flex align-items-center">
													<input class="joinCheck" type="checkbox">
													<span class="customCheck"><i class="fas fa-check"></i></span>
													<h6 class="mr-3 ml-3 mb-0">تدريب فردي</h6>
												</label>
												<label class="col-lg-9 col-12 mb-4">
													<input class="Account-input" type="number" placeholder="ادخل سعر الباقة">
												</label>
											</div>
										</div>
										<div class="tab-pane fade" id="medium" role="tabpanel" aria-labelledby="nav-medium-tab">
											<div class="row justify-content-center">
												<label class="col-lg-9 col-12 mb-4">
													<input class="Account-input" type="number" placeholder="ادخل ساعات التدريب">
												</label>
												<label class="col-lg-9 col-12 mb-4">
													<input class="Account-input" type="number" placeholder="ادخل مدة التوصيل">
												</label>
												<label class="col-md-8 col-12 mt-2 mb-2 position-relative d-flex align-items-center">
													<input class="joinCheck" type="checkbox">
													<span class="customCheck"><i class="fas fa-check"></i></span>
													<h6 class="mr-3 ml-3 mb-0">تدريب فردي</h6>
												</label>
												<label class="col-lg-9 col-12 mb-4">
													<input class="Account-input" type="number" placeholder="ادخل سعر الباقة">
												</label>
											</div>
										</div>
										<div class="tab-pane fade" id="vip-course" role="tabpanel" aria-labelledby="nav-vip-tab">
											<div class="row justify-content-center">
												<label class="col-lg-9 col-12 mb-4">
													<input class="Account-input" type="number" placeholder="ادخل ساعات التدريب">
												</label>
												<label class="col-lg-9 col-12 mb-4">
													<input class="Account-input" type="number" placeholder="ادخل مدة التوصيل">
												</label>
												<label class="col-md-8 col-12 mt-2 mb-2 position-relative d-flex align-items-center">
													<input class="joinCheck" type="checkbox">
													<span class="customCheck"><i class="fas fa-check"></i></span>
													<h6 class="mr-3 ml-3 mb-0">تدريب فردي</h6>
												</label>
												<label class="col-lg-9 col-12 mb-4">
													<input class="Account-input" type="number" placeholder="ادخل سعر الباقة">
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="d-flex align-items-center justify-content-center mt-5">
									<button class="show-btn defultlink"><span>حفظ</span></button>
								</div>
							</form>
						</div>
						<div class="tab-pane fadeRight" id="reservation" role="tabpanel" aria-labelledby="nav-reservation-tab">
							<div class="reservation">
								<div class="row">
									<div class="col-12">
										<div class="card-reservation">
											<div class="d-flex flex-column">
												<h6><b>اسم المشترك</b></h6>
												<h6><b><span>نوع الاشتراك :</span> <span>الباقة الاساسية </span></b></h6>
												<h6><b><span>قيمة الاشتراك :</span> <span class="text-dark">الباقة الاساسية </span></b></h6>
											</div>
											<div class="d-flex flex-column align-items-end">
												<h6><b>تاريخ الحجز</b></h6>
												<h6><b><span>22\10\2021</span></b></h6>
												<div class="d-flex align-items-center">
													<button class="btn accept">قبول <span class="fa fa-check"></span></button>
													<button class="btn deny">رفض <span class="fa fa-close"></span></button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="card-reservation">
											<div class="d-flex flex-column">
												<h6><b>اسم المشترك</b></h6>
												<h6><b><span>نوع الاشتراك :</span> <span>الباقة الاساسية </span></b></h6>
												<h6><b><span>قيمة الاشتراك :</span> <span class="text-dark">الباقة الاساسية </span></b></h6>
											</div>
											<div class="d-flex flex-column align-items-end">
												<h6><b>تاريخ الحجز</b></h6>
												<h6><b><span>22\10\2021</span></b></h6>
												<div class="d-flex align-items-center">
													<button class="btn accept">قبول <span class="fa fa-check"></span></button>
													<button class="btn deny">رفض <span class="fa fa-close"></span></button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="card-reservation">
											<div class="d-flex flex-column">
												<h6><b>اسم المشترك</b></h6>
												<h6><b><span>نوع الاشتراك :</span> <span>الباقة الاساسية </span></b></h6>
												<h6><b><span>قيمة الاشتراك :</span> <span class="text-dark">الباقة الاساسية </span></b></h6>
											</div>
											<div class="d-flex flex-column align-items-end">
												<h6><b>تاريخ الحجز</b></h6>
												<h6><b><span>22\10\2021</span></b></h6>
												<div class="d-flex align-items-center">
													<button class="btn accept">قبول <span class="fa fa-check"></span></button>
													<button class="btn deny">رفض <span class="fa fa-close"></span></button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fadeRight" id="balance" role="tabpanel" aria-labelledby="nav-balance-tab">
							<div class="d-flex justify-content-around">
								<div class="balance-card">
									<p><b>عدد الدورات</b></p>
									<p><b>200</b></p>
								</div>
								<div class="balance-card">
									<p><b>الاجمالي</b></p>
									<p><b>200 ر.س</b></p>
								</div>
								<div class="balance-card">
									<p><b>نسبة الموقع</b></p>
									<p><b>2%</b></p>
								</div>
							</div>
							<div class="mt-3 mb-3">
								<table class="table">
									<thead>
										<tr>
											<th scope="col">رقم الطلب</th>
											<th scope="col">الاجمالي</th>
											<th scope="col">نسبة الموقع</th>
											<th scope="col">المبلغ المستحق</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<h6><b>1255488</b></h6>
											</td>
											<td>
												<h6><b>2000 ر.س</b></h6>
											</td>
											<td>
												<h6><b>10%</b></h6>
											</td>
											<td>
												<h6><b>250</b></h6>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="total">
								<h6>اجمالي المبلغ المستحق</h6>
								<h6><b>300 ر.س</b></h6>
							</div>
							<div class="d-flex justify-content-center">
								<button class="show-btn change-txt defultlink mb-0"><span>طلب تسوية </span></button>
							</div>
							<div class="mt-3 mb-3">
								<a href="{{ url('/' . ($page = 'bank_tansaction')) }}" class="show-btn change-txt defultlink mb-0"><span>الحولات البنكية </span></a>
							</div>
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