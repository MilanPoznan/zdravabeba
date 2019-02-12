jQuery(function($) {
	// Tab link

	if ($(window).width() > 1200) {
		const $tabLink = $('.js-header-tab-link');
		const firstTabLink = $tabLink[0];

		$(firstTabLink).addClass('active-tab-link');
		$tabLink.each(index => {
			$tabLink.on('click', e => {
				console.log(this);
				$(firstTabLink).removeClass('active-tab-link');
				$('.archive-tab__header-tab').removeClass('active-tab-link');
				e.target.className += ' active-tab-link';
			});
		});
	} else {
		const $tabSelect = $('.js-tab-select');
		const $tabLink = $('.js-mobile-header-tab-link');
		const firstTabLink = $tabLink[0];
		const $firstLinkValue = $(firstTabLink).addClass('active-link');

		$tabLink.on('click', e => {
			let selectText = e.target.text;
			$tabSelect.text(selectText);
			console.log($tabSelect);
			$('.js-select-mask-wrap').slideToggle();
		});
		$tabSelect.val($(firstTabLink).text());
		// $('.js-tab-select')
		$('.js-tab-select').on('click', e => {
			$('.js-select-mask-wrap').slideToggle();
		});
	}
});
