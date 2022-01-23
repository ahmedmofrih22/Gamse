@extends('layouts2.master')
@section('title')
المحادثات
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


@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="loader">
    <span class="load"></span>
</div>
<!-- breadcrumb -->
@endsection
@section('content')

<section id="chat-section" class="chat-section">
    <div class="row h-100">
        <div class="col-lg-3 col-md-4 col-12 p-0 h-100">
            <div class="chatRooms">
                <div class="chat-title">
                    <h5>المحادثات</h5>
                    <a class="defultlink" href=""><img src="assets games/images/left-arrow%20(1).png" alt=""></a>
                </div>
                <div class="chat-room act">
                    <div class="user-avatar">
                        <img src="assets games/images/4284.jpg" alt="">
                        <h6>اسم العميل</h6>
                    </div>
                    <img alt="" src="assets games/images/more%20(1).png">
                    <span class="on linePatch"></span>
                </div>
                <div class="chat-room">
                    <div class="user-avatar">
                        <img src="assets games/images/4284.jpg" alt="">
                        <h6>اسم العميل</h6>
                    </div>
                    <img alt="" src="assets games/images/more%20(1).png">
                    <span class="linePatch"></span>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-8 col-12 h-100 p-0">
            <div class="conversation">
                <div class="conver-title">
                    <div class="user-avatar">
                        <img src="assets games/images/4284.jpg" alt="">
                        <h6>اسم العميل</h6>
                    </div>
                    <button class="btn closeChat" href=""><img src="assets games/images/delete.png" alt=""></button>
                </div>
                <div class="chat-body">
                    <div class="mine">
                        <div class="message-txt">
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                        </div>
                    </div>
                    <div class="other">
                        <div class="message-txt">
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                        </div>
                    </div>
                </div>
                <div class="chat-footer">
                    <div class="chat-sender">
                        <label class="w-100 position-relative m-0">
                            <input class="sender-input" placeholder="اكتب رسالتك هنا">
                        </label>
                        <h5 class="sender m-0"><img src="assets games/images/send.png" alt=""></h5>
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