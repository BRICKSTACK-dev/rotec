$(function() {
    $('.js-height1').matchHeight();
    $('.js-height2').matchHeight();
    $('.js-height3').matchHeight();
    $('.js-height4').matchHeight();


    $('body').append('<div id="modalArea"><div id="modalTable"><div id="modalCell"><div id="modalInner"><div id="modalContents"></div><div id="modalClose"><span>閉じる　×</span></div></div></div></div></div>');
    $('.js_modalbtn').on('click', function(){
        var el = $('.js-modal-material').html();
        $('#modalContents').empty();
        $('#modalContents').append(el);
        $('#modalArea').fadeIn(300);
    });
    $('#modalClose,#modalArea').on('click', function(){
        $('#modalArea').fadeOut(300);
    });
    $('#modalContents').on('click', function(e){
        e.stopPropagation();
    });
	
    $('body').append('<div id="modalArea"><div id="modalTable"><div id="modalCell"><div id="modalInner"><div id="modalContents"></div><div id="modalClose"><span>閉じる　×</span></div></div></div></div></div>');
    $('.js_modalbtn_partnership').on('click', function(){
        var el = $('.js-modal-partnership').html();
        $('#modalContents').empty();
        $('#modalContents').append(el);
        $('#modalArea').fadeIn(300);
    });
    $('#modalClose,#modalArea').on('click', function(){
        $('#modalArea').fadeOut(300);
    });
    $('#modalContents').on('click', function(e){
        e.stopPropagation();
    });

    $('body').append('<div id="modalArea"><div id="modalTable"><div id="modalCell"><div id="modalInner"><div id="modalContents"></div><div id="modalClose"><span>閉じる　×</span></div></div></div></div></div>');
    $('.js_modalbtn_multistakeholder').on('click', function(){
        var el = $('.js-modal-multistakeholder').html();
        $('#modalContents').empty();
        $('#modalContents').append(el);
        $('#modalArea').fadeIn(300);
    });
    $('#modalClose,#modalArea').on('click', function(){
        $('#modalArea').fadeOut(300);
    });
    $('#modalContents').on('click', function(e){
        e.stopPropagation();
    });

});