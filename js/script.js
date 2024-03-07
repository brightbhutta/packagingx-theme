    $(document).ready(function() {

    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });

    jQuery('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: [
        "<i class='fa fa-caret-left'></i>",
        "<i class='fa fa-caret-right'></i>"
      ],
      autoplay: true,
      pagination:true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 6
        }
      }
    });

    jQuery('#singlebox').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      autoplay: true,
      items: 1,
      autoplayTimeout:300,
      slideSpeed : 200,
      responsiveClass:true,
      navText: ["<div class='nav-button owl-prev'>‹</div>", "<div class='nav-button owl-next'>›</div>"],
      autoplayHoverPause: true,
      dots: true,
      responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1024: {
            items: 6
          }
        }
      });
});