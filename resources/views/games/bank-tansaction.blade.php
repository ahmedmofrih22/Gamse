@extends('layouts2.master')
@section('title')
الجولات البنكيه
@stop
<link rel="icon" href="{{URL::asset('assets/img/brand/favicon.png')}}" type="image/x-icon" />

@section('css')
<!-- Internal Data table css -->
<link rel="stylesheet" href="{{ URL::asset('assets games/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets games/css/animate.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets games/css/all.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets games/css/jquery-ui.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets games/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets games/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets games/css/style.css')}}">
<style>
    .breadcrumb {
        background-color: unset;
        font-size: 17px;
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

<section class="mt-4 mb-4">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="defultlink" href="Account.html">حسابي</a></li>
                <li class="breadcrumb-item active" aria-current="page">الحولات البنكية</li>
            </ol>
        </nav>
        <div class="row transaction">
            <div class="col-12">
                <div class="transaction-card">
                    <img class="mr-3 ml-3" src="assets games/images/rocket.png" alt="">
                    <div class="d-flex flex-column">
                        <h6 class="mt-2 mb-2"><b><span>المبلغ :</span><span>200 ر.س</span></b></h6>
                        <h6 class="mt-2 mb-2"><b><span>10\2\2021</span></b></h6>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="transaction-card">
                    <img class="mr-3 ml-3" src="assets games/images/rocket.png" alt="">
                    <div class="d-flex flex-column">
                        <h6 class="mt-2 mb-2"><b><span>المبلغ :</span><span>200 ر.س</span></b></h6>
                        <h6 class="mt-2 mb-2"><b><span>10\2\2021</span></b></h6>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="transaction-card">
                    <img class="mr-3 ml-3" src="assets games/images/rocket.png" alt="">
                    <div class="d-flex flex-column">
                        <h6 class="mt-2 mb-2"><b><span>المبلغ :</span><span>200 ر.س</span></b></h6>
                        <h6 class="mt-2 mb-2"><b><span>10\2\2021</span></b></h6>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="transaction-card">
                    <img class="mr-3 ml-3" src="assets games/images/rocket.png" alt="">
                    <div class="d-flex flex-column">
                        <h6 class="mt-2 mb-2"><b><span>المبلغ :</span><span>200 ر.س</span></b></h6>
                        <h6 class="mt-2 mb-2"><b><span>10\2\2021</span></b></h6>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="transaction-card">
                    <img class="mr-3 ml-3" src="assets games/images/rocket.png" alt="">
                    <div class="d-flex flex-column">
                        <h6 class="mt-2 mb-2"><b><span>المبلغ :</span><span>200 ر.س</span></b></h6>
                        <h6 class="mt-2 mb-2"><b><span>10\2\2021</span></b></h6>
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
    <script>
        $(document).ready(function() {
            $(".conversation").fadeOut(0)
            $(".chat-room").on("click", function() {
                $(".conversation").fadeIn(500)
            })
            $(".closeChat").on("click", function() {
                $(".conversation").fadeOut(300)
            })
        })
    </script>
    <script>
        var input = $(".sender-input")
        $('.chat-body').scrollTop($(".chat-body").height());
        // click send
        $(".sender").on("click", function() {
            if (!(input.val())) {
                $(".chat-body").append();
            } else {
                $(".chat-body").append(`
                    <div class="mine">
                        <div class="message-txt">
                           ${$(".sender-input").val()}
                        </div>
                    </div>
        `).animate({
                    scrollTop: $('.chat-body').prop("scrollHeight")
                }, 1000);
            }
            input.val("");
        });

        // press enter send
        $(function() {
            $(".sender-input").keypress(function(e) {
                var code = (e.keyCode ? e.keyCode : e.which);
                if (code == 13) {
                    if (!(input.val())) {
                        $(".chat-body").append();
                    } else {
                        $(".chat-body").append(`
                            <div class="mine">
                                <div class="message-txt">
                                   ${$(".sender-input").val()}
                                </div>
                            </div>
                `).animate({
                            scrollTop: $('.chat-body').prop("scrollHeight")
                        }, 1000);
                    }
                    input.val("");
                    return true;
                }
            });
        });
    </script>
    @endsection