//slick carousel

$(document).ready(function() {
    $('.gallery-carousel').slick({
      slidesToShow: 3, 
      slidesToScroll: 1, 
      autoplay: false, 
    //   autoplaySpeed: 5000,
      infinite:true,
      centerMode:true,
      centerPadding: '0',
      focusOnSelect: false,
      responsive: [
        {
          breakpoint: 1445,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            centerPadding: '0',
          }
        },
        {
          breakpoint: 770,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            centerPadding: '0',
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            centerPadding:true
          }
        }
      ]
    });
});


// floting elements

const parentDiv = document.getElementById('home-section');
const elementToChange = document.querySelector(".home-section-1-absolute-img-1");

function isBottomVisible() {
  const parentRect = parentDiv.getBoundingClientRect();
  return parentRect.bottom <= window.innerHeight;
}

function handleScroll() {
  if (isBottomVisible()) {
    elementToChange.style.position = "absolute";
  } else {
    elementToChange.style.position = "fixed";
  }
}

window.addEventListener("scroll", function(){
  handleScroll();  
});