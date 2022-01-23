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
<div style="height: auto" class="panner-top">
    <div class="carousel-pic pt-4 pb-4" style="background:url('{{asset('assets games/images/background.png')}}')">
        <div class="container overflow-hidden">
            <div class="couch-layer">
                <div class="row justify-content-between fadeRight">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <img class="couch-pic" alt="" src="{{asset('images/coaches/'.$coch->photo)}}">

                                <h6 class="text-center"><b>4 طلبات تنفذ</b></h6>
                            </div>
                            <div class="col-md-6 col-12">
                                <h6 class="mt-0 mb-4"><b>مدرب fifa 2021</b></h6>
                                <h6 class="mt-0 mb-4"><b>اسم المدرب:{{$coch->name}}</b></h6>
                                <h6 class="mb-0"><b>المنصة:</b></h6>
                                <h6 class="mt-0 mb-4"><b>ps 4</b></h6>
                                <h6 class="mt-0 mb-4"><b>متوسط التقييمات</b></h6>
                                <h4 class="mt-0 mb-4"><b><i style="color: #FFD700" class="fas fa-star">5.0</i> (4)</b></h4>
                            </div>
                            <div class="col-12">
                                <a href="{{ url($page ='conver_sation') }}" class="show-btn defultlink"><span>تواصل مع المدرب</span></a>
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
                        <nav class="tabsNav">
                            <div class="nav nav-tabs row position-relative" id="nav-tab" role="tablist">
                                <a class="col-4 nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">الاساسية</a>
                                <a class="col-4 nav-item nav-link two" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">المتوسطة</a>
                                <a class="col-4 nav-item nav-link three" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">الممتازة</a>
                                <span class="slider"></span>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="information">
                                    <div class="d-lg-flex justify-content-between">
                                        <h6>1 ساعة تدريب</h6>
                                        <h6><b>150 ر.س</b></h6>
                                    </div>
                                    <div class="describe">
                                        <h6>الوصف</h6>
                                        <p>
                                            {{$coch->description}}
                                        </p>
                                    </div>
                                    <h6><i class="far fa-clock mr-2 ml-2"></i> 60 يوم توصيل للخدمة</h6>
                                    <h6><i style="color: green" class="fas fa-check mr-2 ml-2"></i> تدريب فردي</h6>
                                    <a href="{{ url('/' . ($page ='reservat')) }}" class="show-btn defultlink mb-0"><span>حجز <span class="price">(150 ر.س)</span></span></a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="information">
                                    <div class="d-lg-flex justify-content-between">
                                        <h6>1 ساعة تدريب</h6>
                                        <h6><b>150 ر.س</b></h6>
                                    </div>
                                    <div class="describe">
                                        <h6>الوصف</h6>
                                        <p>
                                            {{$coch->description}}
                                        </p>
                                    </div>
                                    <h6><i class="far fa-clock mr-2 ml-2"></i> 60 يوم توصيل للخدمة</h6>
                                    <h6><i style="color: green" class="fas fa-check mr-2 ml-2"></i> تدريب فردي</h6>
                                    <a href="{{ url('/' . ($page ='reservat')) }}" class="show-btn defultlink mb-0"><span>حجز <span class="price">(150 ر.س)</span></span></a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="information">
                                    <div class="d-lg-flex justify-content-between">
                                        <h6>1 ساعة تدريب</h6>
                                        <h6><b>150 ر.س</b></h6>
                                    </div>
                                    <div class="describe">
                                        <h6>الوصف</h6>
                                        <p>
                                            {{$coch->description}}

                                        </p>
                                    </div>
                                    <h6><i class="far fa-clock mr-2 ml-2"></i> 60 يوم توصيل للخدمة</h6>
                                    <h6><i style="color: green" class="fas fa-check mr-2 ml-2"></i> تدريب فردي</h6>
                                    <a href="{{ url('/' . ($page ='reservat')) }}" class="show-btn defultlink mb-0"><span>حجز <span class="price">(150 ر.س)</span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="mt-4 mb-4 discribSection">
    <div class="container overflow-hidden">
        <div class="describe-txt fadeRight">
            <h3><b>الوصف</b></h3>
            <p>
                {{$coch->description}}
            </p>
        </div>
        <div class="cours-vid fadeRight">
            <img class="cours-img" src="{{asset('assets games/images/background.png')}}" alt="">
            <!-- <a data-fancybox="gallery" data-type="video" href="assets games/images/SJ4000 - Short Cinematic Test Video - YouTube.mkv"> -->
            <a data-fancybox="gallery" data-type="video" href="assets games/images/SJ4000 - Short Cinematic Test Video - YouTube.mkv">
                <div class="play-button">
                    <img src="{{asset('assets games/images/play-circle.png')}}" alt="">
                </div>
            </a>
        </div>
    </div>
</section>
<section class="mt-5 mb-5">
    <div class="container overflow-hidden">
        <div class="postsContainer fadeRight">
            <div class="row posts">
                <div class="col-12">
                    <div class="post">
                        <img class="post-img" src="{{asset('assets games/images/4284.jpg')}}" alt="">
                        <div class="postBody">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0"><b>اسم العميل</b></h6>
                                <div class="d-flex align-items-center mr-5 ml-5">
                                    <h5 class="rating four">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </h5>
                                    <span>(5/5)</span>
                                </div>
                            </div>
                            <p class="post-txt">
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                            </p>
                        </div>
                        <span class="timePost">10\1\2021</span>
                    </div>
                </div>
                <div class="col-12">
                    <div class="post">
                        <img class="post-img" src="{{asset('assets games/images/4284.jpg')}}" alt="">
                        <div class="postBody">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0"><b>اسم العميل</b></h6>
                                <div class="d-flex align-items-center mr-5 ml-5">
                                    <h5 class="rating four">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </h5>
                                    <span>(5/5)</span>
                                </div>
                            </div>
                            <p class="post-txt">
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                            </p>
                        </div>
                        <span class="timePost">10\1\2021</span>
                    </div>
                </div>
                <div class="col-12">
                    <div class="post">
                        <img class="post-img" src="{{asset('assets games/images/4284.jpg')}}" alt="">
                        <div class="postBody">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0"><b>اسم العميل</b></h6>
                                <div class="d-flex align-items-center mr-5 ml-5">
                                    <h5 class="rating four">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </h5>
                                    <span>(5/5)</span>
                                </div>
                            </div>
                            <p class="post-txt">
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                            </p>
                        </div>
                        <span class="timePost">10\1\2021</span>
                    </div>
                </div>
                <div class="col-12">
                    <div class="post">
                        <img class="post-img" src="{{asset('assets games/images/4284.jpg')}}" alt="">
                        <div class="postBody">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0"><b>اسم العميل</b></h6>
                                <div class="d-flex align-items-center mr-5 ml-5">
                                    <h5 class="rating four">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </h5>
                                    <span>(5/5)</span>
                                </div>
                            </div>
                            <p class="post-txt">
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                            </p>
                        </div>
                        <span class="timePost">10\1\2021</span>
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