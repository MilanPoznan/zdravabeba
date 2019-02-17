/*#####################
### Cookie popup ###
#####################*/
export default ( $ ) => {

  const $cookiePopup = $('.js-cookie');
  const $closeCookiePopup = $('.js-close-popup');

  let getStorage = localStorage.getItem('cookie');

  function setCookieToTrue() {
    localStorage.setItem('cookie', 'true');
  }
  function showCookiePopup() {
    $cookiePopup.css('display', 'block'); 
    $('body').addClass('no-scroll');  
  }
  function hideCookiePopup() {
    $cookiePopup.css('display', 'none');
    $('body').removeClass('no-scroll');  
    setCookieToTrue();
  } 

  function init() {
    //Show popup after 2 seconds
    if (getStorage !== 'true') {   
      setTimeout(showCookiePopup, 2000);
    } 

    // Close cookie popup
    $closeCookiePopup.on('click', hideCookiePopup );
    }

  return {
    init
  } 
}

