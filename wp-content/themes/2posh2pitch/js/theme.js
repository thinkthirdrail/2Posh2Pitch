jQuery(function($) {
    $(document).ready(function() {
        $(window).on('scroll', function() {
            console.log("sdasd");
            $(".cta").css("opacity", 1 - $(window).scrollTop() / 450);
            $(".banner .overlay").css("opacity", 0.5 + $(window).scrollTop() / 1000);
        });
    });
});
