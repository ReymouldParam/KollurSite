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

// mobile navbar visiblity
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

//////////////////////
// smooth section scroll navigation
/////////////////////

$(document).ready(function() {
  
  function scrollToSection(targetId, offsetFraction) {
    var target = $("#" + targetId + "-section");
    var windowHeight = $(window).height();
    var targetTop = target.offset().top;
    var scrollTo = targetTop - (windowHeight * offsetFraction);

    $('html, body').animate({
      scrollTop: scrollTo
    }, 300);
  }


  $("#aboutus-link, #highlights-link, #gallery-link, #amenities-link, #contact-link").click(function(e) {
    e.preventDefault();
    var targetId = $(this).attr("id").replace("-link", "");
    scrollToSection(targetId, 1/8); 
    $('.toggle-menu-main-container').css("max-height", "0");
    navMenuVisible = false;
  });
});

