jQuery(function($) {
	const $archiveSections = $('.archive-page__last-posts');
	const $oneProduct = $('.one-product');
	const $sectionNumber = $archiveSections.length + 1;
	const sectionID = 'category_' + $sectionNumber;
	$('.one-product').attr('id', sectionID);
});
