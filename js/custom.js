(function ($) {
  "use strict";

  $(window).on("scroll", function () {
    if ($(window).scrollTop() > 50) {
      $(".main-header").addClass("fixed-menu");
    } else {
      $(".main-header").removeClass("fixed-menu");
    }
  });

  $("#slides-shop").superslides({
    inherit_width_from: ".cover-slides",
    inherit_height_from: ".cover-slides",
    play: 5000,
    animation: "fade",
  });

  $(".cover-slides ul li").append("<div class='overlay-background'></div>");

  var Container = $(".container");
  Container.imagesLoaded(function () {
    var portfolio = $(".special-menu");
    portfolio.on("click", "button", function () {
      $(this).addClass("active").siblings().removeClass("active");
      var filterValue = $(this).attr("data-filter");
      $grid.isotope({
        filter: filterValue,
      });
    });
    var $grid = $(".special-list").isotope({
      itemSelector: ".special-grid",
    });
  });

  // Testimonials carousel
  $(".testimonial-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1000,
    center: true,
    margin: 24,
    dots: true,
    loop: true,
    nav: false,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      992: {
        items: 3,
      },
    },
  });
})(jQuery);
