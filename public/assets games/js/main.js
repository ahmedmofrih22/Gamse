
$(window).on("load", function(){
    $('.loader').fadeOut("slow" , function (){
        $( '.loader' ).remove();
    });
})
var ls = 0;
$(window).scroll(function (event){
    var win = $(window).scrollTop();
    if(win > ls ) {
        $(".user-ico ul").addClass("bottom-nav_scroll")
    }else {
        $(".user-ico ul").removeClass("bottom-nav_scroll")
    }
    ls = win
});

$(".navBar.user-ico li").on("click" , function (){
    $(".navBar.user-ico li").removeClass("act");
    $(this).addClass("act");
})
$(".chat-room").on("click" , function (){
    $(".chat-room").removeClass("act");
    $(this).addClass("act");
})
$(".bars,.nav-layer").click(function(){
    $(".bars").toggleClass("x-bars");
    $(".nav-layer").toggleClass("open");
    $(".user-tab ul").toggleClass("open");
    // $(".bars").css("z-index" , "99")
});

function resize()
{
    var heights = window.innerHeight;
    document.getElementById("chat-section").style.height = (heights - 62) + "px";
}
resize();
window.onresize = function() {
    resize();
};