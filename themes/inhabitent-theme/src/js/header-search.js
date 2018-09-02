(function($) {
  let $searchForm = $('.main-navigation .search-form');
  $searchForm.hide();
  $('.main-navigation .fas.fa-search').click(() => {
    $searchForm.animate({ width: 'toggle' }, 350, function() {
      $('.main-navigation .search-form input').focus();
    });
  });
  $('.main-navigation .search-form input').blur(() => {
    $searchForm.animate({ width: 'toggle' }, 350);
  });
})(jQuery);
