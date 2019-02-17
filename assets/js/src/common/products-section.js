export default ($) => {

  const $slider = $('.products-section__slider');
  console.log($slider);

    const $arrowsContainer = $('.products-section__image-container');
    let sliderInitialized = false;

    // Previous / next arrow template strings
    const prevArrow = `<div class="slick-prev"></div>`;
    const nextArrow = `<div class="slick-next"></div>`;

    // Slick slider arguments
    const args = {
      appendArrows: $slider,
      dots: false,
      nextArrow,
      prevArrow,
      swipe: false,
      slidesToShow: 3,
      responsive: [
          {
            breakpoint: 9999,
            settings: "unslick"
          },
          {
          breakpoint: 768,
          settings: {
            swipe: true,
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    }


    function init() {
      // Initialize slick slider
      $slider.slick(args);
      sliderInitialized = true;
    }

    function handleResize() {

      setTimeout(function() {
        if(window.innerWidth < 768 && !sliderInitialized) {
          init();
          sliderInitialized = true;
        } else if (window.innerWidth >= 768 && sliderInitialized) {
          sliderInitialized = false;
        }
      }, 250)
    }
  
    return { init, handleResize }
  

}