/* ==========================================================
[ 目次 ]

<body>クラス設定
smoothscroll Link
Hash Link
gnav-menu
Contents FadeIn
gnav-menu SP
Pagetop
business Height
Corporate Slide
Height
Map
Hash Link
BR remove

========================================================== */

/* ---------------------------------------------
*   <body>クラス設定
--------------------------------------------- */
/**
 * <body>要素に、ユーザーのOS・デバイスとブラウザ等に関数情報をクラスとして付与する
 * OS・デバイス: ios, iphone, ipad, android, androidphone, androidtablet, windows, mac
 * ブラウザ: ie, edge, chrome, firefox, safari
 */
$(function() {
    'use strict';

    $('body').addClass(function() {
        var bodyClasses = '';

        // プラットフォーム判定
        if (is.ios()) {
            bodyClasses += ' ios';

            if (is.iphone()) {
                bodyClasses += ' iphone';
            } else if (is.ipad()) {
                bodyClasses += ' ipad';
            }
        } else if (is.android()) {
            bodyClasses += ' android';

            if (is.androidPhone()) {
                bodyClasses += ' androidphone';
            } else if (is.androidTablet()) {
                bodyClasses += ' androidtablet';
            }
        } else if (is.windows()) {
            bodyClasses += ' windows';
        } else if (is.mac()) {
            bodyClasses += ' mac';
        }

        // ブラウザ判定
        if (is.ie()) {
            bodyClasses += ' ie';

            if (is.ie(10)) {
                bodyClasses += ' ie10';
            } else if (is.ie(11)) {
                bodyClasses += ' ie11';
            }
        } else if (is.edge()) {
            bodyClasses += ' edge';
        } else if (is.chrome()) {
            bodyClasses += ' chrome';
        } else if (is.firefox()) {
            bodyClasses += ' firefox';
        } else if (is.safari()) {
            bodyClasses += ' safari';
        }

        return bodyClasses;
    });
});

/* ---------------------------------------------
*   smoothscroll Link
--------------------------------------------- */
$(function() {
    'use strict';
    var $window = $(window);

    $('[href^="#"]').on('click.smoothScroll', function() {
        var href = $(this).attr('href');
        var $target;

        if (is.ie(9) || is.ie(10)) {
            $target = $(href === '#' ? 'body' : href);
        } else {
            $target = $(href === '#' ? 'html' : href);
        }

        var offset = -110;

        if ($window.width() <= 767) {
            var offset = -50;
        }

        // スクロール位置をずらす場合は、
        // ここで条件分岐等を行う

        $target.velocity('scroll', {
            duration: 400,
            easing: 'swing',
            offset: offset
        });

        return false;
    });
});

/* ---------------------------------------------
*   gnav-menu
--------------------------------------------- */
$(function() {
    var $gnavList1 = $('.js-target1');
    var $gnavList1Target = $('.js-target1 .gnav-menu-open');
    var $gnavList2 = $('.js-target2');
    var $gnavList2Target = $('.js-target2 .gnav-menu-open');
    var $gnavList3 = $('.js-target3');
    var $gnavList3Target = $('.js-target3 .gnav-menu-open');
    var $gnavList4 = $('.js-target4');
    var $gnavList4Target = $('.js-target4 .gnav-menu-open');
    var $gnavList5 = $('.js-target5');
    var $gnavList5Target = $('.js-target5 .gnav-menu-open');
    var $gnavList6 = $('.js-target6');
    var $gnavList6Target = $('.js-target6 .gnav-menu-open');
    $gnavList1.hover(
        function() {
            sethover = setTimeout(function() {
                $gnavList1Target.stop(true, true).slideDown();
            }, 200);
        },
        function() {
            $gnavList1Target.slideUp();
            clearTimeout(sethover);
        }
    );
    $gnavList2.hover(
        function() {
            sethover = setTimeout(function() {
                $gnavList2Target.stop(true, true).slideDown();
            }, 200);
        },
        function() {
            $gnavList2Target.slideUp();
            clearTimeout(sethover);
        }
    );
    $gnavList3.hover(
        function() {
            sethover = setTimeout(function() {
                $gnavList3Target.stop(true, true).slideDown();
            }, 200);
        },
        function() {
            $gnavList3Target.slideUp();
            clearTimeout(sethover);
        }
    );
    $gnavList4.hover(
        function() {
            sethover = setTimeout(function() {
                $gnavList4Target.stop(true, true).slideDown();
            }, 200);
        },
        function() {
            $gnavList4Target.slideUp();
            clearTimeout(sethover);
        }
    );
    $gnavList5.hover(
        function() {
            sethover = setTimeout(function() {
                $gnavList5Target.stop(true, true).slideDown();
            }, 200);
        },
        function() {
            $gnavList5Target.slideUp();
            clearTimeout(sethover);
        }
    );
    $gnavList6.hover(
        function() {
            sethover = setTimeout(function() {
                $gnavList6Target.stop(true, true).slideDown();
            }, 200);
        },
        function() {
            $gnavList6Target.slideUp();
            clearTimeout(sethover);
        }
    );
});

/*  gnav-menu-underlayer
--------------------------------------------- */
$(function() {
    var $trigger = $('.gnav-menu-open__item');

    $trigger.hover(
        function() {
            $('.gnav-menu-underlayer:not(:animated)', this).slideDown();
        },

        function() {
            $('.gnav-menu-underlayer', this).slideUp();
        }
    );
});

/* ---------------------------------------------
*   Contents FadeIn
--------------------------------------------- */
$(function() {
    var $fadeCt = $('.js-fadein');
    $fadeCt.on('inview', function(event, isInView) {
        if (isInView) {
            $(this).addClass('js-fadein--content');
        }
    });
});

/* ---------------------------------------------
*   gnav-menu SP
--------------------------------------------- */
$(function() {
    $('.bl_gnavBtnList_item01 a').click(function() {
        $(this)
            .parent('li')
            .hide();
        $(this)
            .parent('li')
            .next()
            .show();
        $('.bl_cover').fadeIn();
        $('.bl_sp_box').addClass('on');
        return false;
    });

    $('.bl_gnavBtnList_item02 a').click(function() {
        $(this)
            .parent('li')
            .hide();
        $(this)
            .parent('li')
            .prev()
            .show();
        $('.bl_cover').fadeOut();
        $('.bl_sp_box').removeClass('on');
        return false;
    });

    $('.bl_cover').click(function() {
        $('.bl_gnavBtnList_item02').hide();
        $('.bl_gnavBtnList_item01').show();
        $(this).fadeOut();
        $('.bl_sp_box').removeClass('on');
        return false;
    });

    $('.ly_head .bl_gnav_List li:has(ul)').hover(function() {
        $(this)
            .children('a')
            .toggleClass('on');
        $(this)
            .children('a')
            .next()
            .stop()
            .slideToggle(300);
    });

    $('.bl_icoSpan').click(function() {
        $(this).toggleClass('on');
        $(this)
            .parent()
            .next()
            .slideToggle();
        return false;
    });
});

/* ---------------------------------------------
*   Pagetop
--------------------------------------------- */
$(function() {
    var $topBtn = $('.page-navi-fixed');
    var $windowScroll = $(window);
    var activeClass = 'is-show';

    $windowScroll.on('scroll', function() {
        var winTop = $windowScroll.scrollTop();

        if (winTop > 200) {
            $topBtn.addClass(activeClass);
        } else {
            $topBtn.removeClass(activeClass);
        }
    });
});

$(function() {
    var $window = $(window);
    var $target = $('.js-target');
    var targetBottom;
    var threshold = 400;
    var $footer = $('.ly_foot');
    var $footerPagenav = $('.js-target');

    if ($window.width() >= 768) {
        //pc
        $window.on('load scroll', function() {
            var footerHeight = $footer.outerHeight();
            var windowHeight = $window.height();
            var documentHeight = $(document).height();
            var absoluteTrigger =
                documentHeight - windowHeight - footerHeight + 84;

            if ($window.scrollTop() > absoluteTrigger) {
                $target.addClass('js-target--absolute').css({ bottom: 200 });
            } else {
                $target.removeClass('js-target--absolute').css({ bottom: 0 });
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

/* ---------------------------------------------
*   business Height
--------------------------------------------- */
$(function() {
    $('.js-height-business').matchHeight();
});

/* ---------------------------------------------
*   Corporate Slide
--------------------------------------------- */
$(function() {
    var workSlider = function() {
        var slider = '.js-corporate-slider';
        var thumbnailItem = '.thumbnails-target';

        // サムネイル画像アイテムに data-index でindex番号を付与
        $(thumbnailItem).each(function() {
            var index = $(thumbnailItem).index(this);
            $(this).attr('data-index', index);
        });

        // スライダー初期化後、カレントのサムネイル画像にクラス「thumbnail-current」を付ける
        $(slider).on('init', function(slick) {
            var index = $('.slider-target.slick-slide.slick-current').attr(
                'data-slick-index'
            );
            $(thumbnailItem + '[data-index="' + index + '"]').addClass(
                'thumbnail-current'
            );
        });

        //slickスライダー初期化
        $(slider).slick({
            fade: true,
            prevArrow:
                '<a href="#" class="blue-frame-link blue-frame-link--long blue-frame-link--re js-prev">前へ</a>',
            nextArrow:
                '<a href="#" class="blue-frame-link blue-frame-link--long js-next">次へ</a>',
            infinite: false
        });

        //サムネイル画像アイテムをクリックしたときにスライダー切り替え
        $(thumbnailItem).on('click', function() {
            var index = $(this).attr('data-index');
            $(slider).slick('slickGoTo', index, false);
        });

        //サムネイル画像のカレントを切り替え
        $(slider).on('beforeChange', function(
            event,
            slick,
            currentSlide,
            nextSlide
        ) {
            $(thumbnailItem).each(function() {
                $(this).removeClass('current');
            });
            $(thumbnailItem + '[data-index="' + nextSlide + '"]').addClass(
                'current'
            );
        });
    };

    workSlider();
});

/* ---------------------------------------------
*   Height
--------------------------------------------- */
$(function() {
    $('.js-height-institute1').matchHeight();
    $('.js-height-institute2').matchHeight();
    $('.js-height-institute3').matchHeight();

    $('.js-height-cassettes1').matchHeight();
    $('.js-height-cassettes2').matchHeight();
    $('.js-height-cassettes3').matchHeight();
});

/* ---------------------------------------------
*   Map
--------------------------------------------- */
$(function() {
    $('img[usemap]').rwdImageMaps();

    $('area').on('hover', function() {
        return false;
    });

    var $imageMapLink = $('.image-map-link');
    var $listItem = $('.map-area-head__list-item');
    var $maparea = $('#maparea');
    var currentClass = 'current';

    $imageMapLink.on('mouseover', function() {
        var index = $imageMapLink.index(this) + 1;
        $maparea.attr('src', '/img/corporate/img_map_hover' + index + '.png');
        $('.map-area-head__list-item:nth-of-type(' + index + ')').addClass(
            currentClass
        );
    });
    $imageMapLink.on('mouseout', function() {
        var index = $imageMapLink.index(this) + 1;
        $maparea.attr('src', '/img/corporate/img_map.png');
        $('.map-area-head__list-item:nth-of-type(' + index + ')').removeClass(
            currentClass
        );
    });

    $listItem.on('mouseover', function() {
        var index = $listItem.index(this) + 1;
        $maparea.attr('src', '/img/corporate/img_map_hover' + index + '.png');
    });
    $listItem.on('mouseout', function() {
        $maparea.attr('src', '/img/corporate/img_map.png');
    });
});

/* ---------------------------------------------
*   Hash Link
--------------------------------------------- */
$(window).on('load', function() {
    var hash = window.location.hash;

    if (is.ie()) {
        setTimeout(hashTime, 500);
    } else {
        hashTime();
    }

    function hashTime() {
        if (window.location.hash) {
            // if ($(hash).length) {
            var position = $(hash).offset().top;
            scroll(position);
            console.log(position);
        } else {
            return;
        }

        function scroll(position) {
            $('html, body').animate({
                scrollTop: position
            });
        }
    }
});

/* ---------------------------------------------
*   BR remove
--------------------------------------------- */
$(function() {
    var $breadcrumb = $('.breadcrumb__list-item');

    if ($breadcrumb.children('p') ) {
        $breadcrumb.children('p').find('br').remove();
    }
});
