import jQuery from "jquery";
import Swiper from "swiper";
import Aos from "aos";

(function(document, window, jQuery, Swiper) {
  const routes = require("./routes");

  window.$ = window.jQuery = jQuery;
  window.Swiper = Swiper;
  
  Aos.init();

  require("./components/navbar");
  require("./components/header-adjustment");
  require("./components/click-play-video");
  require("./components/click-social-media-mobile");
  require("./components/share-social-media");
  require("./components/toggle-sidebar-social");
  require("./components/btn-scroll-top");
  require("./components/swiper-folk");
  require("./components/newsletter-validation");
  require("./components/submenu-active");
  require("./components/swiper-courses");
  require("./components/swiper-testimonials");
  require("./components/swiper-photos");

  if (routes.checkRoute("about") ||
      routes.checkRoute("blog") ||
      routes.checkRoute("program")) {
    require("./components/submenu-scroll")
  }

  //Blog 
  if(routes.checkRoute("blog")) {
    require("./components/click-search")
    require("./components/header-adjustment-blog");
  }

  //Contact
  if(routes.checkRoute("program")) {
    require("./components/thank-you")
    require("./components/header-adjustment-blog");
  }

  //Category Filter 
  if(routes.checkRoute("category") ||
     routes.checkRoute("filter")) {
    require("./components/scroll-page")
  }
    
})(document, window, jQuery, Swiper);
