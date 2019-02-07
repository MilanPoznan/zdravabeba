/****************************
 * Navigation handler object *
 ****************************/

// import dependencies
import { TimelineLite } from 'gsap';

/**
 * Main menu responsive handler
 *
 * @since 1.1.0 GSAP animations introduced
 * @param {Object} jQuery
 * @return {Object} init Initialization method
 */
function Navigation($) {
	// Set up properties
	let isOpen = false,
		resetTimeout,
		$menuToggle = $('.js-menu-toggle'),
		$hamburgerLines = $('.js-hamburger-lines'),
		$menuContainer = $('.js-menu-container'),
		$menuItems = $('.js-menu-item'),
		$screen = $('html, body'),
		tl = new TimelineLite({ paused: true }),
		// For hide/show navigation purpose
		lastScrollPosition = 0,
		scrollCounter = 0;
	const delta = 30,
		$headerHeight = $('.header').outerHeight(),
		$window = $(window),
		$document = $(document);

	// define menu animations
	tl
		.to($menuContainer, 0.2, { y: '0%', scale: 1, opacity: 1, zIndex: 10 })
		.staggerTo($menuItems, 0.2, { opacity: 1 }, 0.05);

	/**
	 * openMenu() opens menu and handles animations
	 *
	 * @since 1.0.0
	 * @access private
	 */
	function openMenu() {
		// start animation
		tl.play();

		// setup state properties
		isOpen = true;
		$hamburgerLines.addClass('is-open');
		$menuContainer.css('display', 'flex');
		// prevent screen from scrolling
		$screen.addClass('no-scroll');
	}

	/**
	 * close menu and handle fade out animations
	 *
	 * @since 1.0.0
	 * @access private
	 */
	function closeMenu() {
		// play reversed in reverse
		tl.reverse();

		// setup state properties
		$hamburgerLines.removeClass('is-open');
		$menuContainer.css('display', 'none');
		isOpen = false;
		$screen.removeClass('no-scroll');
	}

	/**
	 * reset the state if user resize window
	 *
	 * @since 1.0.0
	 * @access private
	 */
	function reset() {
		if ($(window).width() > 1199) {
			// reset animation and state properties
			tl.pause(0);
			$menuContainer.removeAttr('style');
			$menuItems.removeAttr('style');
			$menuToggle.removeClass('is-open');
			$hamburgerLines.removeClass('is-open');
			$screen.removeClass('no-scroll');
			isOpen = false;
		}
	}

	/**
	 * debounce calls for reset() method
	 *
	 * @since 1.0.0
	 * @access private
	 */
	function onResize() {
		clearTimeout(resetTimeout);

		resetTimeout = setTimeout(reset, 300);
	}

	/**
	 * Hide/show naviagation on scroll
	 *
	 * @since 1.0.0
	 * @access private
	 */
	function hasScrolled() {
		let scrollPosition = $document.scrollTop();

		// Make sure it is scrolled more than delta
		if (Math.abs(lastScrollPosition - scrollPosition) <= delta) {
			return;
		}
		// If it is scrolled down and  past the header, add class .header-up
		if (scrollPosition > lastScrollPosition && scrollPosition > $headerHeight) {
			// Scroll Down
			$('.header')
				.removeClass('header-down')
				.addClass('header-up');
		} else {
			// Scroll Up
			if (scrollPosition + $window.height() < $document.height()) {
				$('.header')
					.removeClass('header-up')
					.addClass('header-down');
			}
		}

		lastScrollPosition = scrollPosition;
	}

	/**
	 * debounce calls for hasScrolled() method
	 *
	 * @since 1.0.0
	 * @access private
	 */
	function onScroll() {
		clearTimeout(resetTimeout);
		resetTimeout = setTimeout(hasScrolled, 100);
	}

	/**
	 * initialization method, set up event handlers
	 *
	 * @since 1.0.0
	 * @access public
	 */
	function init() {
		// Attach event handler on hamburger button
		$menuToggle.on('click', e => {
			// If menu is open call openMenu() otherwise call closeMenu()
			if (!isOpen) {
				openMenu();
			} else {
				closeMenu();
			}
		});

		// Attach event handler for window resize
		$(window).on('resize', e => {
			onResize();
		});

		// Attach event handler for scroll
		$(window).on('scroll', e => {
			scrollCounter++;
			if (scrollCounter > 20) {
				hasScrolled();
				scrollCounter = 0;
			}
			onScroll();
		});
	}

	return {
		init
	};
}

export default Navigation;
