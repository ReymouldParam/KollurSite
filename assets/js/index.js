$(".gallery-carousel-main-container").slick({
    slidesToShow: 2, 
    slidesToScroll: 1,
    autoplay: true, 
    autoplaySpeed: 5000,
    centerMode:true,
    centerPadding: '15%',
    dots: true,
    focusOnSelect:true
});

$(".testimonials-carousel-main-container").slick({
    slidesToShow: 3, 
    slidesToScroll: 1,
    autoplay: true, 
    autoplaySpeed: 5000,
    centerMode:true,
    centerPadding: '0',
    dots: false,
    focusOnSelect:true,
    asNavFor:'.testimonials-2-carousel-main-container'
});

$(".testimonials-2-carousel-main-container").slick({
    slidesToShow: 1, 
    slidesToScroll: 1,
    autoplay: true, 
    autoplaySpeed: 5000,
    centerMode:true,
    centerPadding: '0',
    dots: true,
    arrows:false,
    asNavFor:'.testimonials-carousel-main-container',
    fade:true
});