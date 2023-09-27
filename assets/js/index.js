//slick carousel

$(document).ready(function() {
    $('.gallery-carousel').slick({
      slidesToShow: 3, 
      slidesToScroll: 1, 
      autoplay: false, 
    //   autoplaySpeed: 5000,
      infinite:false,
      centerPadding: '0',
      focusOnSelect: false,
      responsive: [
        {
          breakpoint: 1445,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
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

$(document).ready(function() {

  $("#aboutus-link").click(function(e) {
      e.preventDefault(); // Prevent the default behavior of the anchor link
      var target = $("#aboutUs-section");
      var windowHeight = $(window).height();
      var targetTop = target.offset().top;
      var scrollTo = targetTop - (windowHeight / 4); // Scroll to the center of the target

      $('html, body').animate({
          scrollTop: scrollTo
      }, 300); // Adjust the duration (1000 milliseconds) as needed
  });

  $("#ourhightlights-link").click(function(e) {
    e.preventDefault(); // Prevent the default behavior of the anchor link
    var target = $("#ourHighlights-section");
    $('html, body').animate({
        scrollTop: target.offset().top
    }, 300); // Adjust the duration (1000 milliseconds) as needed
  });

  $("#gallery-link").click(function(e) {
    e.preventDefault(); // Prevent the default behavior of the anchor link
    var target = $("#gallery-section");
    $('html, body').animate({
        scrollTop: target.offset().top
    }, 300); // Adjust the duration (1000 milliseconds) as needed
  });

  $("#amenities-link").click(function(e) {
    e.preventDefault(); // Prevent the default behavior of the anchor link
    var target = $("#amenities-section");
    $('html, body').animate({
        scrollTop: target.offset().top
    }, 300); // Adjust the duration (1000 milliseconds) as needed
  });

  $("#location-link").click(function(e) {
    e.preventDefault(); // Prevent the default behavior of the anchor link
    var target = $("#location-section");
    $('html, body').animate({
        scrollTop: target.offset().top
    }, 300); // Adjust the duration (1000 milliseconds) as needed
  });

  $("#contact-link").click(function(e) {
    e.preventDefault(); // Prevent the default behavior of the anchor link
    var target = $("#contactUs-section");
    $('html, body').animate({
        scrollTop: target.offset().top
    }, 300); // Adjust the duration (1000 milliseconds) as needed
  });
});

///////////////
// gallery pop up container//
//////////////

// Initialize a variable to keep track of whether the carousel is open or closed
var isCarouselOpen = false;

// Function to open the carousel
function openCarousel() {
  $('.gallery-popup-carousel').slick({
    slidesToShow: 1, 
    slidesToScroll: 1, 
    autoplay: false, 
    infinite: true,
    centerMode: false,
    centerPadding: '0',
    // Add any responsive settings if needed
  });
  
  // Display the carousel
  $('.gallery-popup-carousel').show();
  
  // Set the flag to indicate that the carousel is open
  isCarouselOpen = true;
}

// Function to close the carousel
function closeCarousel() {
  // Hide the carousel
  $('.gallery-popup-carousel').hide();
  
  // Destroy the Slick Carousel to clean up its resources
  $('.gallery-popup-carousel').slick('unslick');
  
  // Set the flag to indicate that the carousel is closed
  isCarouselOpen = false;
}



var galleryArr = document.querySelectorAll(".gallery-img-container img");

for(var i =0 ; i<galleryArr.length;i++){
  galleryArr[i].addEventListener("click", function(){
    if (!isCarouselOpen) {
      openCarousel();
    }

    $(".gallery-popup-container").css("display", "block");
    $("body").css("overflow-y", "hidden");
  });
}

function closeGalleryPopup(){
  if (isCarouselOpen) {
    closeCarousel();
  }

  $(".gallery-popup-container").css("display", "none");
  $("body").css("overflow-y", "auto");
}


// landing content update


const textSpeed = 40;
const message_1 = "Discover Our Exquisite Apartments";
const message_2 = "Modern Comfort and Luxury Await You";

function delay(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function showText(selector, text, speed) {
  for (let i = 0; i < text.length; i++) {
    document.querySelector(selector).textContent += text[i];
    await delay(speed);
  }
}

async function showParagraphs() {
  await showText("#landingPara1", message_1, textSpeed);
  await delay(500);
  await showText("#landingPara2", message_2, textSpeed);
}

showParagraphs();
