jQuery(function($){
  
  const $button = $('.categories__show-link');
  // const $overlay = $('.categories__overlay');
  // const $content = $('#cat-content');
  
  $button.on('click', function(e) {
    if(window.innerWidth < 768) {
      e.preventDefault();

      // const $parent = $(this).parent();
      const $this = $(this);
      const $overlay = $this.siblings('.categories__overlay');
      const $content = $this.siblings('.categories__content');

      $overlay.addClass('js-overlay');
      $content.addClass('js-cat-content');
      $this.hide();

      console.log($this);
    }
  });


});