jQuery(function($) {
	console.log('single proizvodi');
	const $tabDropdownTitle = $('.js-drop-down-table-title');
	const $tableHeader = $('.single-tab__header-column');
	const $tableContent = $('.js-product-row');
	const $tableHeaderIndex = $tableHeader.data('index');

	$tabDropdownTitle.on('click', e => {
		$(e.target)
			.next()
			.slideToggle();
	});
	$tableHeader.first().addClass('active-tab');
	$tableHeader.on('click', e => {
		let targ = e.target;
		$tableHeader.removeClass('active-tab');
		$(targ).addClass('active-tab');
		let targIndex = targ.getAttribute('value');
		let visibleContent = $tableContent[targIndex - 1];
		$tableContent.fadeOut('fast');
		$(visibleContent).fadeIn('slow');
	});
});
