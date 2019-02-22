jQuery(function($) {
	//Elements
	const $archiveSections = $('.archive-page__last-posts');
	const $oneProduct = $('.one-product');
	const $sectionNumber = $archiveSections.length + 1;
	const sectionID = 'category_' + $sectionNumber;
	const $subMenu = $('.archive-tab__header-wrap');
	const $subMenuTop = $subMenu.offset().top;
	let resetTimeout = null;
	var classAdded = false;

	function stickyHeader(topScroll) {}
	function onScrollDebounce(e) {}
	$(window).on('scroll', e => {
		var scroll = $(window).scrollTop();
		// clearTimeout(resetTimeout);
		// resetTimeout = setTimeout(() => {
		if (scroll > $subMenuTop) {
			$subMenu.addClass('sticky-header');
		} else {
			$subMenu.removeClass('sticky-header');
		}
		// }, 100);
	});
	$('.one-product').attr('id', sectionID);
});
