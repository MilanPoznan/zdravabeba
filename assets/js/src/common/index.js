/**************************
 * Entry point for main.js *
 **************************/

// load modules
import Navigation from './navigation';
import ImgToBackground from './ImgToBackground';

const imgToBgd = ImgToBackground(jQuery);
//Elements
// DOM ready calls
jQuery(function($) {
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
