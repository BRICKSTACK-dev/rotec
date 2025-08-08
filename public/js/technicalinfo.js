$(function() {
    var $btn = $('.selector__trigger');

    $btn.on('click', function() {
        var $scope = $(this).closest('.technical-tab');
        var tagId = $(this).data('id');

        $scope.find('.selector__trigger').removeClass('current');
        $scope.find('.block').removeClass('current');
        $(this).addClass('current');
        $('#' + tagId).addClass('current');
    });
});
