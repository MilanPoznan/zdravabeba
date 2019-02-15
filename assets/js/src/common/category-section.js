export default ($) => {

  const $category = $('.categories__single');
  const $big = $('.categories__single--big');
  const $button = $('.categories__wrapper-link');
  const $overlay = $('.categories__overlay');
  const $content = $('.categories__content');


  function hideOverlay(overlay) {
    overlay.each(function() {
      const $this = $(this);
      if($this.hasClass('js-overlay')) {
        $this.removeClass('js-overlay');
      }
    });
  }

  function hideContent(content) {
    content.each(function() {
      const $this = $(this);
      if($this.hasClass('js-cat-content')) {
        $this.removeClass('js-cat-content');
      }
    });
  }

  function hideBig(big) {
    big.each(function() {
      const $this = $(this);
      if($this.hasClass('js-show-big')) {
        $this.removeClass('js-show-big');
      }
    });
  }

  function showButton(button) {
    button.each(function() {
      $(this).removeClass('js-hide-small');
    });
  }


  function init() {
    if($category.length > 0) {

      if(window.innerWidth < 1200) {

        if($button.length > 0) {
          $button.on('click', function(e) {
            e.preventDefault();
            
            // Hide content and overlay before showing current
            hideBig($big);
            hideOverlay($overlay);
            hideContent($content);
            // Show button if it was hidden
            showButton($button);
  
            // Show current content and overlay and hide button
            const $this = $(this);
            const $contentBig = $(this).siblings('.categories__single--big');
            const $currentOverlay = $contentBig.find('.categories__overlay');
            const $currentContent = $contentBig.find('.categories__content');

            $contentBig.addClass('js-show-big');
            $currentOverlay.addClass('js-overlay');
            $currentContent.addClass('js-cat-content');
            $this.addClass('js-hide-small');
            
          });
        } 
      } else {
        // On brake point hide content and overlay and show button
        hideBig($big);
        hideOverlay($overlay);
        hideContent($content);
        showButton($button);
      }

    } else {
      return;
    }
    
  }

  function handleResize() {
      setTimeout(init, 250);
  }

  return {
    init,
    handleResize
  };
}