(function($) {
  $('.search-form').hide();
  $('.main-navigation .fas.fa-search').click(function() {
    $('.search-form').animate({ width: 'toggle' }, 350, function() {
      $('.search-form input').focus();
    });
  });
})(jQuery);
