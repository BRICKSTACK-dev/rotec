/* ---------------------------------------------
*   pagenavi （english）
--------------------------------------------- */
$(function() {
    var $window = $(window);
    var $target = $('.js-target--english');
    var targetBottom;
    var threshold = 400;
    var $footer = $('.footer');
    var $footerPagenav = $('.js-target--english');

    if ($window.width() >= 768) {
        //pc
        $window.on('load scroll', function() {
            var footerHeight = $footer.outerHeight();
            var windowHeight = $window.height();
            var documentHeight = $(document).height();
            var absoluteTrigger = documentHeight - windowHeight - footerHeight;

            if ($window.scrollTop() > absoluteTrigger) {
                $target.addClass('js-target--absolute').css({ bottom: 120 });
            } else {
                $target.removeClass('js-target--absolute').css({ bottom: 120 });
            }
        });
    }

    if ($window.width() <= 767) {
        //sp
        $window.on('load scroll', function() {
            var footerHeight = $footer.outerHeight();
            var windowHeight = $window.height();
            var documentHeight = $(document).height();
            var absoluteTrigger =
                documentHeight - windowHeight - footerHeight + 35;

            if ($window.scrollTop() > absoluteTrigger) {
                $target.addClass('js-target--absolute').css({ bottom: 330 });
            } else {
                $target.removeClass('js-target--absolute').css({ bottom: 20 });
            }
        });
    }
});
