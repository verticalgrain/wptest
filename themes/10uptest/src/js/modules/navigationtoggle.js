app.navigationtoggle = (function($){
  'use strict';

  function init(){

    // Open and close the navigation
    $('.j-navigation-toggle').on('click',function() {
      $('body').toggleClass('is-nav-toggled');
    })

    $('.j-navigation-close').on('click',function() {
      $('body').removeClass('is-nav-toggled');
    })
    
  }

  $(document).ready(function() {
    init();
  });

})(jQuery);