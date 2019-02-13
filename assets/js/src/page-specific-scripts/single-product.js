jQuery(function($) {
	const $tabDropdownTitle = $('.js-drop-down-table-title');
	$tabDropdownTitle.on('click', e => {
		console.log();
		$(e.target)
			.next()
			.slideToggle();
	});
});
