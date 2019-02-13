/**************************
 * Entry point for main.js *
 **************************/

// load modules
import Navigation from './navigation';
// import ImgToBackground from './ImgToBackground';
import CategorySection from './category-section';
import ProductSlider from './products-section';

// const imgToBgd = ImgToBackground(jQuery);
const categorySection = new CategorySection(jQuery);
const productsSlider = new ProductSlider(jQuery);

// DOM ready calls
jQuery(function($) {
	//Elements

	if ($(window).width() < 1200) {
		const $hamburger = $('.hamburger');

		//Menu
		$hamburger.on('click', () => {
			$('.hamburger').toggleClass('is-active');
			$('.js-menu').slideToggle();
			$('.menu-item').toggleClass('enable-click');
		});

		$('.js-search').on('click', () => {
			$('.header__search-form').slideToggle();
		});

		$('.menu-item-has-children').on('click', e => {
			e.preventDefault();
			let menuWithChildren = e.target;
			$(e.target)
				.next()
				.toggleClass('show-submenu');
		});
	} else {
		$('.menu-item-has-children').on('hover', e => {
			$('.sub-menu').toggle('slow');
		});
	}
	// End menu
	$(window).on('resize', () => {});

	// init navigation module
	const navigation = new Navigation($);
  navigation.init();
  // init products slider
  productsSlider.init();
});
/*#######################
### Window load event ###
#######################*/
jQuery(window).load(function() {
	// imgToBgd.makeImgBackground('.js-image-imgtobg', '.js-background-imgtobg');
	categorySection.init();
});

/*#######################
### Window resize event ###
#######################*/

jQuery(window).resize(function() {
	categorySection.handleResize();
});
