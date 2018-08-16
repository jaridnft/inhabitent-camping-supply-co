(function($) {
  var toggleClasses =
    '.site-header, .main-navigation .menu a, .fas.fa-search, .site-branding .img-div, .search-form input';
  $(toggleClasses).addClass('top');
  // only want to change the margin at the top of the page (for the 'fixed' banner), on a page load
  $('.site-content').addClass('top');
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $('.hero-image-header').innerHeight()) {
      $(toggleClasses).removeClass('top');
    } else {
      $(toggleClasses).addClass('top');
    }
  });
})(jQuery);
