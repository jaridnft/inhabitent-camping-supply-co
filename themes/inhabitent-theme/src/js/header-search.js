(function ($) {
    $('.main-navigation .search-form').hide();
    $('.main-navigation .fas.fa-search').click(
        function () {
            $('.main-navigation .search-form').animate(
                { width: 'toggle' },
                350,
                function () {
                    $('.main-navigation .search-form input').focus();
                }
            );
        }
    );
})(jQuery);
