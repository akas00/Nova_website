(function ($) {
  var COMMON = {
    init: function () {
      this.cacheDOM();

      $(window).on("resize", this.reCalcOnResize.bind(this));
    },
    cacheDOM: function () {
      this.$body = $("body");
      this.windowWidth = $(window).width();
    },
    reCalcOnResize: function () {
      this.windowWidth = $(window).width();
    },
  };

  var mainNavigation = {
    init: function () {
      this.$mainNavContainer = $("#site-navigation");
      this.$menuToggler = this.$mainNavContainer.find(".menu-toggle");
      this.$mainMenuContainer = this.$mainNavContainer.find(
        ".menu-primary-container"
      );
      this.$mainMenu = this.$mainNavContainer.find("#primary-menu");
      console.log(this.$menuToggler);
      this.$menuToggler.on("click", this.toggleMenu.bind(this));
    },
    toggleMenu: function (e) {
      e.preventDefault();
      this.$mainMenuContainer.toggleClass("shown");
    },
  };

  $(function () {
    COMMON.init();
    mainNavigation.init();
  });
  $(".banner-section-slider").slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    arrows: true,
    // autoplay: true,
  });
  // mobile-menu
  $(".hamb_lines").on("click", function (e) {
    $("body").toggleClass("responsive_menu");
  });

  $(".menu-item-has-children").click(function () {
    $("#primary-menu .sub-menu").toggleClass("show");
    $(".menu-item-has-children").toggleClass("rotate");
  });
})(jQuery);
