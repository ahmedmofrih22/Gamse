@extends('layouts2.master')
@section('title')
تفاصيل العبه
@stop
<link rel="icon" href="{{URL::asset('assets/img/brand/favicon.png')}}" type="image/x-icon" />

@section('css')
<!-- Internal Data table css -->

<link rel="stylesheet" href="{{ URL::asset('assets games/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets games/css/animate.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets games/css/all.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets games/css/nice-select.css')}}">
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
	<div class="carousel-pic" style="background: url('{{asset('assets games/images/headerbackgound.png')}}')">
		<div class="panner-layer">
			<h1>GAMERS</h1>
			<h1>DOJO</h1>
		</div>
	</div>
</div>
<section class="trainer-cards mt-5 mb-5">
	<div class="container">
		<h6 style="cursor: pointer;" data-toggle="modal" data-target="#filterModal" class="mb-3">
			<a class="defultlink">
				<img src="{{asset('assets games/images/filter.png')}}" alt="">
				<span class="mr-1 ml-1"><b>تفاصيل العبه</b>
				</span>
			</a>
		</h6>
		<div class="row">
			<div style="height: auto" class="panner-top">
				<div class="carousel-pic pt-4 pb-4">
					<div class="container overflow-hidden">
						<div class="couch-layer">
							<div class="row justify-content-between fadeRight">
								<div class="col-lg-4 col-md-6 col-12">
									<div class="row">
										<div class="col-md-6 col-12" style="width: 248px;">
											<img class="couch-pic" alt="" src="{{asset('images/games/'.$images->photo)}}">

										</div>

										<div class="col-12">
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-12 d-flex align-items-end justify-content-end">
									<div class="d-flex">
										<h4 id="fav" class="react-ico"><i class="fas fa-heart" style="padding-top: 11px;"></i></h4>
										<h4 class="react-ico"><a class="defultlink" href=""><i class="fas fa-share-alt" style="padding-top: 11px;"></i></a></h4>
									</div>
								</div>
								<div class="col-lg-5 col-md-6 col-12">

									<div class="tab-content" id="nav-tabContent">
										<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
											<div class="information">
												<div class="d-lg-flex justify-content-between">

												</div>
												<div class="describe">
													<h6>تفاصيل</h6>
													<p>

													</p>
												</div>
												<h6><i style="color: green" class="fas fa-check mr-2 ml-2"></i>{{$images->title}}</h6>
											</div>
										</div>

									</div>
								</div>
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
<script src="{{ URL::asset('assets games/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{ URL::asset('assets games/js/jquery.nice-select.js')}}"></script>
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
	$(document).ready(function() {
		$('select').niceSelect();
	});
</script>

@endsection