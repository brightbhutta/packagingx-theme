$('#displaycarousels').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  dots: false,
  navText: ["<div class='nav-button owl-prev'>‹</div>", "<div class='nav-button owl-next'>›</div>"],
  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1,
      dots: true
    },
    767: {
      items: 2,
      dots: true
    },
    1024: {
      items: 4,
      dots: true
    }
  }
});