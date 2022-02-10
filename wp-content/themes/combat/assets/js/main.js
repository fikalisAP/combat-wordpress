
$(function () {
    $('.menu__btn').on('click', function () {
        $('.menu__items').toggleClass('active');
    });
    $('.reviews__slider').slick({
        dots: true,
        arrows: false
    });

    $('[data-fancybox]').fancybox({
        protect: true,
        buttons: [
            'zoom',
            'thumbs',
            'close'
        ]
    });

});



