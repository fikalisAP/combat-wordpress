
$(function () {
    $('.menu__btn').on('click', function () {
        $('.menu__btn').toggleClass('active__burger');
        $('.menu__items').toggleClass('active');
        $('body').toggleClass('test');
        $('.logo').toggleClass('test2')
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



