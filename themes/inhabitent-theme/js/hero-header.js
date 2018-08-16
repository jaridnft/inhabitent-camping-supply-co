(function($) {
  var toggleClasses =
    '.site-header, .main-navigation .menu a, .site-content, .fas.fa-search, .site-branding .img-div';
  $(toggleClasses).addClass('top');
  $(window).on('scroll', function() {
    if ($(window).scrollTop() - 50 > $('.hero-image-header').innerHeight()) {
      $(toggleClasses).removeClass('top');
    } else {
      $(toggleClasses).addClass('top');
    }
  });
})(jQuery);
