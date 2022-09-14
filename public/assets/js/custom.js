new WOW().init();
function sidebar() {
  $(".menu-btn").on("click", function () {
    $(".bs-menu").addClass("active");
  });
  $(".btn-close").on("click", function () {
    $(".bs-menu").removeClass("active");
  });
}
function testimonial() {
  var swiper = new Swiper(".testimonial-slider", {
    navigation: {
      nextEl: ".small-triangle-next",
      prevEl: ".small-triangle-prev",
    },
  });
}
function sticky_nav() {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 0) {
      $(".bs-header").addClass("sticky");
      $(
        ".bs-header .navbar .container .collapse .right-nav .bs-btn"
      ).removeClass("typ-white");
    } else {
      $(".bs-header").removeClass("sticky");
      $(".bs-header .navbar .container .collapse .right-nav .bs-btn").addClass(
        "typ-white"
      );
    }
  });
}
function team() {
  var swiper = new Swiper(".team-img", {
    slidesPerView: "auto",
    spaceBetween: 0,
    autoplay: { delay: 2500, disableOnInteraction: false },
  });
}
function magnific() {
  $(".popup-youtube").magnificPopup({ type: "iframe" });
}
function counter() {
  var counted = 0;
  if ($("#cstm-counter").length == 1) {
    var oTop = $("#cstm-counter").offset().top - window.innerHeight;
    if (counted == 0 && $(window).scrollTop() > oTop) {
      $(".count").each(function () {
        var $this = $(this),
          countTo = $this.attr("data-count");
        $({ countNum: $this.text() }).animate(
          { countNum: countTo },
          {
            duration: 2e3,
            easing: "swing",
            step: function () {
              $this.text(Math.floor(this.countNum));
            },
            complete: function () {
              $this.text(this.countNum);
            },
          }
        );
      });
      counted = 1;
    }
  }
}
function masonry() {
  var $container = $(".gap-create");
  var $team = $(".new-team");
  $container.imagesLoaded(function () {
    $(".gap-create").masonry({ itemSelector: ".typ-card-margin" });
  });
  $team.imagesLoaded(function () {
    $(".new-team").masonry({ itemSelector: ".img-card-team" });
  });
}
function switch_tab() {
  $(".switch .checkbox").change(function () {
    if ($(this).is(":checked")) {
      $(".tab-2").fadeIn("slow");
      $(".tab-1").fadeOut("fast");
    } else {
      $(".tab-1").fadeIn("slow");
      $(".tab-2").fadeOut("fast");
    }
  });
  var tab_height = $(".tab-data").height();
  $(".tab-data").css("height", tab_height);
  $(".tab-data").css("overflow-y", "hidden");
}
function active_menu() {
  var filename = window.location.href.substr(
    window.location.href.lastIndexOf("/") + 1
  );
  $(".bs-header ..list .item a").each(function () {
    if ($(this).attr("href") == filename) {
      $(this).parent().addClass("active");
    }
  });
}
$(function () {
  active_menu();
  switch_tab();
  sidebar();
  testimonial();
  sticky_nav();
  team();
  magnific();
  masonry();
});
