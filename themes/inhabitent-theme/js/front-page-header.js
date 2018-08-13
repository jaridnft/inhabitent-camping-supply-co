(function () {
  $(window).scroll(function() {
      if ($(window).scrollTop() !== 0) {
          // $(".header").css({"box-shadow": "none"});
          console.log("hey");
    }
      else {
          // $(".header").css({"box-shadow": "1.5px 3.5px 4px 0 #CCCCCCCC"});
      }
  });
})();