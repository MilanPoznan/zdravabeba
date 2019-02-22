/**************************
 * Entry point for main.js *
 **************************/

// load modules
import Navigation from './navigation';
// import ImgToBackground from './ImgToBackground';
import CategorySection from './category-section';
// import SocialShare from './social-share';
import ProductSlider from './products-section';
import CookiePopup from './cookie-popup';

// const imgToBgd = ImgToBackground(jQuery);
const categorySection = new CategorySection(jQuery);
// const socialShare = new SocialShare(jQuery);
const productsSlider = new ProductSlider(jQuery);
var scrollTop = 0;
let resetTimeout;
const cookiePopup = new CookiePopup(jQuery);
cookiePopup.init();

// DOM ready calls
jQuery(function($) {
	//Elements

	$(window).on('scroll', function() {
		clearTimeout(resetTimeout);
		resetTimeout = setTimeout(() => {
			scrollTop = $(this).scrollTop();
		}, 300);
	});
	// Show modal for email share
	$('.js-cf-7').on('click', () => {
		$('.cf-share').css('top', '200px');
	});
	//Close modal dialog for email share
	$('.fa-times').on('click', () => {
		$('.cf-share').css('top', '-2000px');
	});
	//Hack for submenu - horrible, but works ;)
	$('.menu-item').on('hover', () => {
		$('.sub-menu').css('top', 120 - scrollTop);
	});

	if ($(window).width() < 1200) {
		const $hamburger = $('.hamburger');
		//Menu
		$hamburger.on('click', () => {
			$('.hamburger').toggleClass('is-active');
			$('.js-menu').slideToggle(400);
			$('.menu-item').toggleClass('enable-click');
			$('body').toggleClass('prevent-scroll');
		});

		$('.js-search').on('click', () => {
			$('.header__search-form').slideToggle();
		});

		$('.menu-item-has-children').on('click', e => {
			// e.preventDefault();
			let menuWithChildren = e.target;
			$(e.target)
				.next()
				.toggleClass('show-submenu');
		});
	}

	// init navigation module
	const navigation = new Navigation($);
	navigation.init();
	// init products slider
	productsSlider.init();
});
/*#######################
### Window load event ###
#######################*/

function twitterShareFx(e) {
	e.preventDefault();
	var twitterWindow = window.open(
		'https://twitter.com/share?url=' + document.URL,
		'twitter-popup',
		'height=350,width=600',
	);
	if (twitterWindow.focus) {
		twitterWindow.focus();
	}
	return false;
}
function facebookShareFx(e) {
	e.preventDefault();
	var facebookWindow = window.open(
		'https://www.facebook.com/sharer/sharer.php?u=' + document.URL,
		'facebook-popup',
		'height=350,width=600',
	);
	if (facebookWindow.focus) {
		facebookWindow.focus();
	}
	return false;
}
jQuery(window).load(function() {
	var twitterShare = document.querySelector('[data-js="twitter-share"]');
	var twitterShareSingle = document.querySelector(
		'[data-js="twitter-share-single"]',
	);
	var facebookShare = document.querySelector('[data-js="facebook-share"]');
	var facebookShareSingle = document.querySelector(
		'[data-js="facebook-share-single"]',
	);

	jQuery(twitterShareSingle).on('click', twitterShareFx);
	jQuery(twitterShare).on('click', twitterShareFx);

	jQuery(facebookShareSingle).on('click', facebookShareFx);
	jQuery(facebookShare).on('click', facebookShareFx);
	// imgToBgd.makeImgBackground('.js-image-imgtobg', '.js-background-imgtobg');
	categorySection.init();
});

/*#######################
### Window resize event ###
#######################*/

jQuery(window).resize(function() {
	categorySection.handleResize();
	productsSlider.handleResize();
});
