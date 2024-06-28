$(document).ready(function(){
    $('.main-slider').slick({
        autoplay: true,
        autoplayspeed: 4000,
        dots: true,
        infinite: true,
        prevArrow: false,
        nextArrow: false,      
    });
    $('.client-container').slick({
      autoplay: true,
      infinite: true,
      slidesToShow: 13,
      variableWidth: true
    });
    $('.partner-container').slick({
        autoplay: true,
        infinite: true,
        slidesToShow: 13,
        variableWidth: true
    });
});