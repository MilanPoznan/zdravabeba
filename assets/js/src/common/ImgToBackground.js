/***************************
 * Img to Background module *
 ***************************/

/**
 * Img to Background module
 *
 * Get all images with provided selector
 * and convert them to background on parent element
 * @param {Object} jQuery
 */
function ImgToBackground($) {
	// check if parameter is present
	if (typeof $ == 'undefined') {
		console.error(
			'imgToBackground was instantiated without parameter. Parameter needs to be instance of jQuery.',
		);
	}

	/**
	 * get all image templates and load them in DOM
	 *
	 * @since   1.1.0
	 * @access  public
	 * @param   string  imgTemplate   css selector for image template(s)
	 * @param   string  imgcontainer  css selector for container where image will be loaded in DOM
	 * @return  void
	 */
	function lazyLoadImages(imgTemplate, imgcontainer) {
		// get lazy images
		const $lazyImages = $(imgTemplate);

		// if there's no any image template bail
		if ($lazyImages.length < 1) {
			return;
		}

		// loop through images and load them in parent element
		$lazyImages.each((i, template) => {
			const $template = $(template);
			const $templateParent = $template.parent('.js-background-imgtobg');

			// if parent is not imgtobg parent element throw error
			if ($templateParent.length < 1) {
				console.error(
					"Image template parent element has to have 'js-background-imgtobg' class.",
				);
			}

			// load them in DOM
			$templateParent.append($template.html());
		});
	}

	/**
	 * Set background pictures from img elements
	 *
	 * @since   1.0.0
	 * @access  public
	 * @param   string  imgSelector     css selector for images
	 * @param   string  parentSelector  css selector for prent element
	 */
	function makeImgBackground(imgSelector, parentSelector) {
		// Get all images and based on provided selector
		const $images = $(imgSelector);

		// check if there is any image
		if ($images.length < 1) {
			console.error(
				`There is no images on the page with provided css selector: ${imgSelector}.`,
			);
		}

		// For each image select currentSrc prop and set it as parent background
		// and then hide original image
		$images.each((index, image) => {
			// if element is not an image
			if (
				image.nodeName.toLowerCase() !== 'img' ||
				!/\.(jpg|jpeg|png|svg|gif)$/i.test(image.src)
			) {
				// convert non-image element to string representation
				const placeholder = document.createElement('div');
				placeholder.appendChild(image.cloneNode(false));
				const elemToString = placeholder.innerHTML;

				console.error(
					`Element ${elemToString} is not an valid image HTML element.`,
				);
			}

			// Get current image
			const $image = $(image);
			// get parent
			const $parent = $image.parent(parentSelector);
			// chek if there is any parent with provided selector
			if ($parent.length < 1) {
				console.error(
					`Image ${
						image.src
					} does not have a parent element with provided css selector: ${parentSelector}.`,
				);
			}

			// get current src or just src if current is not supported (support for IE)
			// and encode it properly
			const imgSource = $image.prop('currentSrc') || $image.prop('src');
			const encodedSrc = encodeURI(imgSource);

			// Set parent element background-image to be current image currentSrc
			$parent.css('background-image', `url( ${encodedSrc} )`);
			// Hide original image from page
			$image.hide();
		});
	}

	return {
		lazyLoadImages,
		makeImgBackground,
	};
}

export default ImgToBackground;
