(function ($) {
  $(window).scroll(function() {
    if ($(window).scrollTop() < 528) {
        // $(".header").css({"box-shadow": "1.5px 3.5px 4px 0 #CCCCCCCC"});
    }
    else {   // this checks if at bottom of hero-banner
        console.log($(window).scrollTop());
        //   $(".header").css({"box-shadow": "none"});
    }
  });
})( jQuery );