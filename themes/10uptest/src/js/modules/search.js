app.search = (function($){
  'use strict';

  function init(){
    
    // Open and close the search field
    // When the search field opens, set focus on the input
    $('.j-search-toggle').on('click',function() {
      if ( $('body').hasClass('is-search-toggled') ) {
        $('body').removeClass('is-search-toggled');  
      } else {
        $('body').addClass('is-search-toggled');      
        $('input[type="search"]').focus();
      }

    })

    // Close the search field
    $('.j-search-close').on('click',function() {
      $('body').removeClass('is-search-toggled');
    })
    
  }

  $(document).ready(function() {
    init();
  });

})(jQuery);