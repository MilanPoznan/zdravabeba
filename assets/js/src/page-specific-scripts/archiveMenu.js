/**
 * Toggle dropdown menu on archive pages
 */

const archiveMenu = document.querySelector('.archive__hero-dropdown');

if(archiveMenu) {

  const button = document.querySelector('.archive__hero-dropdown-btn');

  // Add 'click' event listerner to menu button
  button.addEventListener('click', (e) => {
    if(!archiveMenu.classList.contains('js-dropdown')) {
      archiveMenu.classList.add('js-dropdown');
    } else {
      archiveMenu.classList.remove('js-dropdown');
    }
  });

  // Remove modifier class on large devices
  const handleResize = el => {
    if(el.classList.contains('js-dropdown') && window.innerWidth >= 1200) {
      el.classList.remove('js-dropdown');
    }
  };

  // Add 'resize' event listener to global object
  window.addEventListener('resize', () => {
    setTimeout(handleResize, 250, archiveMenu);
  });

}