jQuery(function(o){o(document).ready(function(){o(window).on("scroll",function(){console.log("sdasd"),o(".cta").css("opacity",1-o(window).scrollTop()/450),o(".banner .overlay").css("opacity",.5+o(window).scrollTop()/1e3)})})});