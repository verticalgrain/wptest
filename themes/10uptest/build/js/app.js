var app={};app.loading=function(o){"use strict";o(window).on("load",function(){localStorage.getItem("loading-flag")?(o(".overlay.overlay--loading").addClass("is-invisible"),setTimeout(function(){o(".overlay.overlay--loading").addClass("is-hidden")},1e3)):(localStorage.setItem("loading-flag","true"),setTimeout(function(){o(".overlay.overlay--loading").addClass("is-invisible")},1800),setTimeout(function(){o(".overlay.overlay--loading").addClass("is-hidden")},3e3))})}(jQuery),app.navigationtoggle=function(o){"use strict";o(document).ready(function(){o(".j-navigation-toggle").on("click",function(){o("body").toggleClass("is-nav-toggled")}),o(".j-navigation-close").on("click",function(){o("body").removeClass("is-nav-toggled")})})}(jQuery),app.search=function(o){"use strict";o(document).ready(function(){o(".j-search-toggle").on("click",function(){o("body").hasClass("is-search-toggled")?o("body").removeClass("is-search-toggled"):(o("body").addClass("is-search-toggled"),o('input[type="search"]').focus())}),o(".j-search-close").on("click",function(){o("body").removeClass("is-search-toggled")})})}(jQuery),app.skiplink=function(e){"use strict";e(document).ready(function(){e(".skip-link").click(function(o){o.preventDefault(),e("#main").attr("tabindex","-1").focus()})})}(jQuery),app.template=function(o){"use strict";console.log("This is a test to confirm javascript is working"),o(document).ready(function(){console.log("This is a test to confirm jquery is working")})}(jQuery);