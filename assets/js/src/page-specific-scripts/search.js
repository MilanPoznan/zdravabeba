jQuery(function($) {
	const $proizvodiItems = $('.type-proizvodi');
	const $postsItems = $('.type-post');
	const $savetiSaveti = $('.type-saveti');
	const $searchResultProizvodi = $('.search-results-counter-0');
	const $searchResultPost = $('.search-results-counter-1');
	const $searchResultSaveti = $('.search-results-counter-2');
	const $showMore = $('.show-more');

	$searchResultProizvodi.text($proizvodiItems.length + ' rezultata');
	$searchResultPost.text($postsItems.length + ' rezultata');
	$searchResultSaveti.text($savetiSaveti.length + ' rezultata');

	if ($proizvodiItems.length > 3) {
		$('.show-more-0').css('display', 'flex');
		$('.show-more-0').on('click', e => {
			$proizvodiItems.css('display', 'flex');
		});
	} else if ($postsItems.length > 3) {
		$('.show-more-1').css('display', 'flex');
		$('.show-more-1').on('click', e => {
			$postsItems.css('display', 'flex');
		});
		console.log('pojavi se post');
	} else if ($savetiSaveti.length > 3) {
		$('.show-more-2').css('display', 'flex');
		$('.show-more-2').on('click', e => {
			$savetiSaveti.css('display', 'flex');
		});
	}
});
