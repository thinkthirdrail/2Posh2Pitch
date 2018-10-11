jQuery(function($) {
    $(document).ready(function() {
        $(window).on('scroll', function() {
            var x = $(window).scrollTop() / 10;
            console.log(x);
            $(".cta").css("transform", "translateY(-" + x +"%)");
            $(".tag").css("filter", "blur(" + (x / 5) +"px)");
            $(".tag").css("letter-spacing", 5 + $(window).scrollTop() / 200);
        });
    });
});
