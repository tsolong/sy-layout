(function ($) {

    $(function () {

        $('.nav ul li').eq($('body').attr('data-nav-index')).find('a').addClass('active');

    });

})(jQuery);