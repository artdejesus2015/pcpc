
function isIE() {

    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer, return version number
        return true;
    else                 // If another browser, return 0
        return false;

    return false;
}


(function(a) {
    a.expr[":"].onScreen = function(b) {
        var c = a(window),
            d = c.scrollTop(),
            e = c.height(),
            f = d + e,
            g = a(b),
            h = g.offset().top,
            i = g.height(),
            j = h + i;
        return h >= d && h < f || j > d && j <= f || i > e && h <= d && j >= f
    }
})(jQuery);

if(isIE() || navigator.userAgent.match(/Windows Phone/i) || (/Edge\/12./i.test(navigator.userAgent)) || (/Edge\/13./i.test(navigator.userAgent)) || (/Edge\/14./i.test(navigator.userAgent))){

    jQuery('body').addClass('IEbrowser');

}

$(document).scroll(function() {

    var m =$(".testimonials--masthead");

    if(m.is(':onScreen')) {
        m.addClass('is-animated')
    }
    else {
        m.removeClass('is-animated');
    }
});



$(document).ready(function(){
    $(".mobile-toggle").click(function(){
        $("body").toggleClass("mobile-toggle-open", "slow");
    });
});

var iframe = document.getElementById('modal-video');
// $f == Froogaloop
var player = $f(iframe);

player.api('pause');

$('.video-trigger').click(function(){
    $('.possibilities__box').addClass('is-triggered');
    $('body').addClass('is-in');
    player.api('play');

});

$('.modal__overlay').click(function(){
    $('body').removeClass('is-in');
    $('.possibilities__box').removeClass('is-triggered');
    player.api('pause');
});


jQuery("document").ready(function($){

    var nav = $('.menu--primary');
        nav_wrap = $('.l-header');

    $(window).scroll(function () {
        if ($(this).scrollTop() > 80) {
            nav.addClass("f-nav");
            nav_wrap.addClass("nav-index");

        } else {
            nav.removeClass("f-nav");
            nav_wrap.removeClass("nav-index");
        }
    });

});