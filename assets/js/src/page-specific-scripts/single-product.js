jQuery(function($) {
	const $tabDropdownTitle = $('.js-drop-down-table-title');
	const $tableHeader = $('.single-tab__header-column');
	const $tableContent = $('.js-product-row');
	const $tableHeaderIndex = $tableHeader.data('index');

	console.log($tableContent);

	$tabDropdownTitle.on('click', e => {
		console.log();
		$(e.target)
			.next()
			.slideToggle();
	});

	$tableHeader.on('click', e => {
		let targ = e.target;
		let targIndex = targ.getAttribute('value');
		console.log(targIndex);
		let visibleContent = $tableContent[targIndex - 1];
		$tableContent.fadeOut('fast');
		$(visibleContent).fadeIn('slow');
	});
});
