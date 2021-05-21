/*=========================================================================================
// INICIO MAIN JS
========================================================================================= */

jQuery(function ($) {
  $(document).ready(function () {
    $(".owl-banner").owlCarousel({
      loop: true,
      margin: 10,
      dots: true,
      nav: false,
      autoplay: false,
      autoplayHoverPause: true,
      items: 1
    });
    $(".owl-servicos").owlCarousel({
      loop: true,
      margin: 10,
      autoplay: false,
      autoplayHoverPause: true,

      responsive: {
        0: {
          items: 1,
          dots: true,
          touchDrag: true,
          mouseDrag: true
        },
        1000: {
          items: 3,
          dots: false,
          nav: false,
          touchDrag: false,
          mouseDrag: false
        }
      }
    });

    $(".hl-mob-menu__trigger").on("click", function () {
      $(this).toggleClass("active");
      $('main, footer').toggleClass("fog");
      $('.hl-mob-menu').toggleClass("active");
    });



    $(window).scroll(detectScroll);

    function detectScroll() {
      var tempScrollTop = $(window).scrollTop();
      if (tempScrollTop > 100) {
        $(".hl-header").addClass("redu");
        $('.hl-mob-menu').addClass("redu");
        
      } else {
        $('.hl-mob-menu').removeClass("redu");
        $(".hl-header").removeClass("redu");
      }
    }


    $(window).on("resize", function(event){
     if($(this).width() >= 768){
      $(".hl-mob-menu__trigger").removeClass('active');
      $('main, footer').removeClass("fog");
      $('.hl-mob-menu').removeClass("active");
     }
    });


    
    $(".phone-mask-pattern").mask("(99) 99999-9999");

    /*=========================================================================================
    // CLOSE FUNCTION
    =========================================================================================*/
  });
});
