jQuery(function($) {
    $(document).ready(function() {
        $(window).on('scroll', function() {
            var x = $(window).scrollTop() / 10;
            console.log(x);
            // $(".cta, .venue").css("transform", "translateY(-" + x +"%)");
            $(".tag").css("filter", "blur(" + (x / 5) +"px)");
            $(".tag").css("letter-spacing", 5 + $(window).scrollTop() / 200);
        });

        $(".cta .buttons div").on("click", function() {
            $(".venue, .cta").stop(true).delay(1000).addClass('active');
            $(".banner .overlay").addClass('active');
            setTimeout(function() {
                $(".venue-content").css("display", "flex").hide().fadeIn();
            }, 300);
        });

        $(".banner p.close").on("click", function() {
            $(".venue-content").fadeOut();
            $(".banner .overlay").removeClass('active');
            setTimeout(function() {
                $(".venue, .cta").stop(true).delay(1000).removeClass('active');
            }, 300);
        });

        // Burger Icon
        $(".burger-wrap").on("click", function() {
            $(this).toggleClass("active");
        });
    });
});
