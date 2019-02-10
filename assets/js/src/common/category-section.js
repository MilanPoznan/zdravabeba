export default ($) => {

  const $category = $('.categories__single');
  const $button = $('.categories__show-link');
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

  function showButton(button) {
    button.each(function() {
      $(this).css("display", "flex");
    });
  }


  function init() {
    if($category.length > 0) {

      if(window.innerWidth < 1200) {

        if($button.length > 0) {
          $button.on('click', function(e) {
            e.preventDefault();
  
            // Hide content and overlay before showing current
            hideOverlay($overlay);
            hideContent($content);
            // Show button if it was hidden
            showButton($button);
  
            // Show current content and overlay and hide button
            const $this = $(this);
            const $currentOverlay = $this.siblings('.categories__overlay');
            const $currentContent = $this.siblings('.categories__content');
            $currentOverlay.addClass('js-overlay');
            $currentContent.addClass('js-cat-content');
            $this.hide();
            
          });
        } 
      } else {
        // On brake point hide content and overlay and show button
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