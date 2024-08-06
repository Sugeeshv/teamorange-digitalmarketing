$('#logo-slder').slick({
    slidesToShow: 1,
    autoplay: true,
    arrows: false,
    centerPadding: '160px',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          slidesToShow: 1
        }
      }
    ]
  });