var timerCount = 0;
var timerId = setInterval(function() {
    timerCount++;

    var topRand = (Math.random() * (3) + 3)*5;
    var leftRand = Math.random() * (3) + 3;

    var selector = $('.terrible-text');
    selector.css('top', 0 + (topRand * 0.1) +'px').css('left', 0 + (leftRand * 0.1) +'%');

    if(timerCount == 100) {
        $('.addmirrorthere').addClass('mirror-text');
    }
    if(timerCount == 102) {
        $('.addmirrorthere').removeClass('mirror-text');
        timerCount = 0;
    }
}, 20);

$('.about_carousel').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});

$(".to_about").click(function() {
    $('html,body').animate({
            scrollTop: $(".about").offset().top},
        'slow');
});
$(".to_shedule").click(function() {
    $('html,body').animate({
            scrollTop: $(".shedule").offset().top},
        'slow');
});
$(".to_rules").click(function() {
    $('html,body').animate({
            scrollTop: $(".rules").offset().top},
        'slow');
});
$(".to_reviews").click(function() {
    $('html,body').animate({
            scrollTop: $(".reviews").offset().top},
        'slow');
});
$(".to_contacts").click(function() {
    $('html,body').animate({
            scrollTop: $(".contacts").offset().top},
        'slow');
});
$(".to_map").click(function() {
    $('html,body').animate({
            scrollTop: $(".yandexmap").offset().top},
        'slow');
});
$(".to_top").click(function() {
    $('html,body').animate({
            scrollTop: $("header").offset().top},
        'slow');
});

$(".buy_one_click_popup").click(function() {
    $('.details_price .price_price').text($(this).data('price')+".00");
    $('.details_day').text($(this).data('dayoftheweek'));
    $('.date_day').text($(this).data('daymonth'));
    $('.date_time').text($(this).data('time'));
    $('input[name=ID]').val($(this).data('id'));
    $('.order').fadeIn('fast');
    return false;
});

$(".details_close, .order_background").click(function() {
    $('.order').hide();
    return false;
});

$('.grid').masonry({
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    percentPosition: true
});

setTimeout(function () {
    var $items = $('<div class="grid-item rmv"></div>');
    // prepend items to grid
    $('.grid').prepend( $items )
    // add and lay out newly prepended items
        .masonry( 'prepended', $items );
},1);


//Review adaptive
$( window ).resize(function() {
    if( $( window ).width() > 992 ){
        $('.grid-item').removeClass('grid-item-1').removeClass('grid-item-2').addClass('grid-item-3');
        $('.grid-sizer').removeClass('grid-sizer-1').removeClass('grid-sizer-2').addClass('grid-sizer-3');
        $('.grid').masonry({
            itemSelector: '.grid-item-3',
            columnWidth: '.grid-sizer-3',
            percentPosition: true
        });
    }
    if( $( window ).width() < 992 && $( window ).width() > 768 ){
        $('.grid-item').removeClass('grid-item-1').removeClass('grid-item-3').addClass('grid-item-2');
        $('.grid-sizer').removeClass('grid-sizer-1').removeClass('grid-sizer-3').addClass('grid-sizer-2');
        $('.grid').masonry({
            itemSelector: '.grid-item-2',
            columnWidth: '.grid-sizer-2',
            percentPosition: true
        });
    }
    if( $( window ).width() < 768 ){
        $('.grid-item').removeClass('grid-item-3').removeClass('grid-item-2').addClass('grid-item-1');
        $('.grid-sizer').removeClass('grid-sizer-3').removeClass('grid-sizer-2').addClass('grid-sizer-1');
        $('.grid').masonry({
            itemSelector: '.grid-item-1',
            columnWidth: '.grid-sizer-1',
            percentPosition: true
        });
    }
});

$(document).keyup(function(e) {
    if (e.keyCode === 27) $('.details_close').click();   // esc
});

$('#phoneinput').mask("9(999)999-99-99");

$('.more_shedule').click(function () {
    $('.calendar-item').show();
    $('.more_shedule').hide();
});

setTimeout(function () {
    $('.popup-notification').hide('fast','swing');
}, 6000);


