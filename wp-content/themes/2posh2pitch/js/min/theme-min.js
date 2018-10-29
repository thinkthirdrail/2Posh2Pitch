jQuery(function(n){n(document).ready(function(){n(window).on("scroll",function(){var e=n(window).scrollTop()/10;
// $(".cta, .venue").css("transform", "translateY(-" + x +"%)");
n(".tag").css("filter","blur("+e/5+"px)"),n(".tag").css("letter-spacing",5+n(window).scrollTop()/200)}),n(".cta .buttons div").on("click",function(){n(".venue, .cta").stop(!0).delay(1e3).addClass("active"),n(".banner .overlay").addClass("active"),setTimeout(function(){n(".venue-content").css("display","flex").hide().fadeIn()},300)}),n(".banner p.close, .overlay").on("click",function(){n(".venue-content").fadeOut(),n(".banner .overlay").removeClass("active"),setTimeout(function(){n(".venue, .cta").stop(!0).delay(1e3).removeClass("active")},300)}),
// Burger Icon
n(".burger-wrap").on("click",function(){n(this).toggleClass("active"),n(this).hasClass("active")?(
// var $saved = $('.burger-wrap').clone();
n("nav.main-nav").addClass("active"),n(".line").removeClass("active"),n("body").css({overflow:"hidden"})):(n("nav.main-nav").removeClass("active"),
// $('header').append($saved);
n("body").css({overflow:"auto"}))});var e=n(".pre-blog").offset().top,a=n(window);a.scroll(function(){a.scrollTop()>=e?n(".line").addClass("active"):n(".line").removeClass("active")})})});