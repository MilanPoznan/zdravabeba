export default ($) => {

  const $slider = $('.products-section__slider');
  console.log($slider);

    const $arrowsContainer = $('.products-section__image-container');

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
      slidesToShow: 2,
      // slidesToScroll: 2,
      responsive: [
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
      console.log('product slider');
    }
  
    return { init }
  

}