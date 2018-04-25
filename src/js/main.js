// подключаем библиотеки из bower
//= ../bower_components/jquery/dist/jquery.js
//= ../bower_components/slick-carousel/slick/slick.js

$( function() {
  $( ".burger" ).on( "click", function() {
      $( ".main-nav__list" ).toggleClass( "open", 1000);
  });
});

$('.js-slider').slick({
  lazyLoad: 'ondemand',
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  prevArrow: '.slider__prev',
  nextArrow: '.slider__next'
});

$('.js-slider-to').slick({
  centerMode: true,
  slidesToShow: 3,
  centerPadding: '0',
  arrows: true,
  prevArrow: '.slider-to__prev',
  nextArrow: '.slider-to__next',
  variableWidth: true,
  responsive: [
    {
      breakpoint: 750,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: false,
        variableWidth: false,
      }
    }
  ]
});