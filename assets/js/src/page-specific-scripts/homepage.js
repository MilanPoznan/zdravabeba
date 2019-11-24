jQuery(function($) {
	//Elements
	const $heroArr = $('.js-home-arr'),
		$nextArr = $('.js-next-hero-arr'),
		$prevArr = $('.js-prev-hero-arr'),
		$sliders = $('.js-home-slider'),
		$slidersLength = $sliders.length,
		$dotsContainer = $('.home__hero-dots');
	//State
	var currPosition = 0;
	var totalClick = 0;
	var liderLengthNum = $slidersLength - 1;

	//Create dynamically dots for slider
	for (var i = 0; i < $slidersLength; i++) {
		var sliderDots = document.createElement('li');
		sliderDots.id = i;
		sliderDots.className = 'slider-dots';
		sliderDots.style.cssText =
			'width: 10px; height: 10px; border: 1px solid #fff;border-radius: 50%; margin: 0 5px;';
		$dotsContainer.append(sliderDots);
	}

	//Set active class to first slide dot
	setTimeout(function() {
		$('.slider-dots')[0].className += ' active-dot';
	}, 200);

	//Set style for active dot
	function setActiveDot(i) {
		$('.slider-dots').removeClass('active-dot');
		$('.slider-dots')[i].className += ' active-dot';
	}

	//Go to next or previous slide
	function changeSlide(i) {
		currPosition = -100 * i;
		$sliders.css('left', currPosition + 'vw');
	}

	//Go to next slide
	function nextSlide() {
		totalClick++;
		if (totalClick > liderLengthNum) {
			$sliders.css('left', 0);
			totalClick = 0;
		} else {
			changeSlide(totalClick);
		}
		setActiveDot(totalClick);
	}

	//Go to previous slide
	function prevSlide() {
		totalClick--;
		if (totalClick < 0) {
			$sliders.css('left', 100 * (-$slidersLength + 1) + 'vw');
			totalClick = $slidersLength;
		} else {
			changeSlide(totalClick);
		}
		setActiveDot(totalClick);
	}

	$nextArr.on('click', () => {
		nextSlide();
	});
	$prevArr.on('click', () => {
		prevSlide();
	});
	//Auto slide
	window.setInterval(function() {
		nextSlide();
	}, 6500);
	//Set class to dot
	$('.slider-dots').on('click', function(e) {
		let sliderNumb = e.target.id;
		setActiveDot(sliderNumb);
		totalClick = sliderNumb;
		changeSlide(sliderNumb);
	});
});
