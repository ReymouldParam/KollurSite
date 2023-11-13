$(".gallery-carousel-main-container").slick({
    slidesToShow: 2, 
    slidesToScroll: 1,
    autoplay: true, 
    autoplaySpeed: 5000,
    centerMode:true,
    centerPadding: '15%',
    dots: true,
    focusOnSelect:true,
    responsive: [
        {
          breakpoint: 900,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 650,
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
var navMenuVisible=false;
function toggleNavMenu() {
    var $menuContainer = $('.toggle-menu-main-container');
    if (navMenuVisible) {
        $menuContainer.css("max-height", "0");
        navMenuVisible = false;
    } else {
        $menuContainer.css("max-height", $menuContainer[0].scrollHeight + "px");
        navMenuVisible = true;
    }
}