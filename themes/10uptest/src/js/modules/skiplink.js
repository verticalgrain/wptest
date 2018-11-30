app.skiplink = (function($){
  'use strict';

  function init(){
    $('.skip-link').click(function(e) {
      e.preventDefault();
      $('#main').attr('tabindex', '-1').focus();
    });
  }

  $(document).ready(function() {
    init();
  });

})(jQuery);