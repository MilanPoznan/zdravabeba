/**************************
 * Entry point for main.js *
 **************************/

// load modules
import Navigation from './navigation';
import ImgToBackground from './ImgToBackground';
const imgToBgd = ImgToBackground(jQuery);

// DOM ready calls
jQuery(function($) {
	//Elements

	if ($(window).width() < 1200) {
		const $hamburger = $('.hamburger');
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

	// Submenu open

	$(window).on('resize', () => {});

	// init navigation module
	const navigation = new Navigation($);
  navigation.init();
});
/*#######################
### Window load event ###
#######################*/
jQuery(window).load(function() {
	imgToBgd.makeImgBackground('.js-image-imgtobg', '.js-background-imgtobg');
});

console.log('urgh!');
