<!-- scripts -->
<script src="/js/lib/lib.js"></script>
<script src="/js/common.js"></script>

<?php if(is_post_type_archive('technical_post')):?>
<script src="/js/technicalinfo.js"></script>
<?php endif;?>

<?php if(is_page(1446)):?>
<script src="/js/payment.js"></script>
<?php endif;?>

<?php if(is_front_page()):?>
<script src="/js/index.js"></script>
<script>
    var $slide_ovj;
    var $slide_img;

    function before(i) {
        if (i == 0) {
            ////////////////////////////////////////////////ズーム
            TweenLite.to($('.slide_img0'), 0, {
                scale: 1.12,
                rotationZ: 0.01,
                force3D: true
            });
            TweenLite.to($('.slide_img0'), 7, {
                scale: 1.0,
                rotationZ: 0.01,
                force3D: true
            });
        } else if (i == 1) {
            ////////////////////////////////////////////////右から左
            TweenLite.to($('.slide_img1'), 0, {
                scale: 1.12,
                rotationZ: 0.01,
                force3D: true
            });
            TweenLite.to($('.slide_img1'), 7, {
                scale: 1.0,
                rotationZ: 0.01,
                force3D: true
            });
        } else if (i == 2) {
            ////////////////////////////////////////////////上から下
            TweenLite.to($('.slide_img2'), 0, {
                scale: 1.12,
                rotationZ: 0.01,
                force3D: true
            });
            TweenLite.to($('.slide_img2'), 7, {
                scale: 1.0,
                rotationZ: 0.01,
                force3D: true
            });
        }
    }

    var images = [
        'img/top/img_mainvis01.jpg',
        'img/top/img_mainvis02.jpg',
        'img/top/img_mainvis03.jpg'
    ];

    // 指定画像をプリロードする
    if ($(window).width() > 767) {
        $slide_ovj = $('.un_mainvis');
    } else {
        $slide_ovj = $('.un_sp_info');
    }
    $slide_ovj.backstretch(images, {
        speed: 1000,
        fade: 2000,
        before: 'before'
    });

    $slide_ovj.backstretch('pause');

    var pcflag, spflag;
    if ($(window).width() > 767) {
        pcflag = 1;
        spflag = 0;
    } else {
        pcflag = 0;
        spflag = 1;
    }

    $(window).on('load', function() {
    $('.un_mainvis .un_ttl .un_top_ttl').addClass('on');
    setTimeout(function(){
    $('.un_mainvis .un_ttl .un_en_txt').textillate({
    in: {
    effect: 'fadeIn',
    delayScale: 1.5,
    delay: 50,
    sync: false,
    shuffle: false,
    reverse: false,
    callback: function () {}
    },
    });
    },300);
    $slide_ovj.backstretch('resume');
    });

    </script>
<?php endif;?>
