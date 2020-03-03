





// jQuery('.content-slider').slick({
//     dots: true,
//     customPaging : function(slider, i) {
//     var thumb = jQuery(slider.$slides[i]).data();
//     return '0' + (i + 1);},
//     infinite: true,
//     speed: 300,
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     adaptiveHeight: true
// });



jQuery(function () {
  jQuery('.news__slider').slick({
      infinite: true,
      speed: 600,
      slidesToShow: 1,
        autoplay: true,
        autoplaySpeed:7000,
      fade: false,
    arrows: true,
      appendArrows: jQuery('.news__arrows'),
      prevArrow: '<div class="news__arrow news__arrow_dir_up"></div>',
      nextArrow: '<div class="news__arrow news__arrow_dir_down"></div>',
   dots: true,
   appendDots: jQuery('.news__dots'),
   customPaging : function(slider, i) {
    var thumb = jQuery(slider.$slides[i]).data();
    return '0' + (i + 1); },
   dotsClass: 'news__dots-list',
      responsive: [{
          breakpoint: 640,
          settings: {
              slidesToShow: 1,
          }
      },
    {
          breakpoint: 400,
          settings: {
              slidesToShow: 1,
          }
      }]
  });
});


// Включение галереи при разрешении < 768px
jQuery(window).on('load resize', function() {
  if (jQuery(window).width() < 768) {
    jQuery('.single .block-lastnews .content-block:not(.slick-initialized)').slick({
      dots: true,
      adaptiveHeight: true,
      infinite: true,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1441,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: false
          }
        }
      ]
    });
  } else {
    jQuery(".single .block-lastnews .content-block.slick-initialized").slick("unslick");
  }
});

// Включение галереи при разрешении < 992
jQuery(window).on('load resize', function() {
  if (jQuery(window).width() < 769) {
    var slickArrows = jQuery('.arrows', '#students_age');

    jQuery('.education_page #students_age .stunents_tabs').not('.slick-initialized').slick({
      // dots: true,
      // adaptiveHeight: true,
      infinite: false,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
      centerMode: true,
      centerPadding: '65px',
      arrows: true,
      responsive: [
        {
          breakpoint: 400,
          settings: {
            infinite: false,
            centerMode: false,
            centerPadding: false,
            slidesToShow: 1,
            slidesToScroll: 1,
          },
          breakpoint: 640,
          settings: {
            infinite: false,
            centerMode: false,
            centerPadding: false,
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
      ],
      appendArrows: slickArrows,
      prevArrow: '<button class="prev__arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 15"><polyline points="0,9 0,6 15,6 15,9 0,9 "/><polyline points="9.8,2 12,0 19,7.5 16.8,9.5 9.8,2 "/><polyline points="16.8,5.5 19,7.5 12,15 9.8,13 16.8,5.5 "/><polygon points="16.8,9.5 19,7.5 19,7.5 "/><path d="M19,7.5l-2.2-2L19,7.5z"/><polyline points="9.8,2 12,0 19,7.5 16.8,9.5 9.8,2 "/></svg></button>',
      nextArrow: '<button class="next__arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 15"><polyline points="0,9 0,6 15,6 15,9 0,9 "/><polyline points="9.8,2 12,0 19,7.5 16.8,9.5 9.8,2 "/><polyline points="16.8,5.5 19,7.5 12,15 9.8,13 16.8,5.5 "/><polygon points="16.8,9.5 19,7.5 19,7.5 "/><path d="M19,7.5l-2.2-2L19,7.5z"/><polyline points="9.8,2 12,0 19,7.5 16.8,9.5 9.8,2 "/></svg></button>',
    });
  }
   else {
    jQuery(".education_page #students_age .stunents_tabs.slick-initialized").slick("unslick");
  }
});


jQuery(function () {
  jQuery('.gallery__slider').slick({
      infinite: true,
      speed: 600,
      slidesToShow: 1,
        autoplay: true,
        autoplaySpeed:15000,
      fade: false,
    arrows: true,
      appendArrows: jQuery('.gallery__arrows'),
      prevArrow: '<div class="gallery__arrow gallery__arrow_dir_up"></div>',
      nextArrow: '<div class="gallery__arrow gallery__arrow_dir_down"></div>',
   dots: true,
   appendDots: jQuery('.gallery__dots'),
   customPaging : function(slider, i) {
    var thumb = jQuery(slider.$slides[i]).data();
    return '0' + (i + 1); },
   dotsClass: 'gallery__dots-list',
      responsive: [{
          breakpoint: 640,
          settings: {
              slidesToShow: 1,
          }
      },
    {
          breakpoint: 400,
          settings: {
              slidesToShow: 1,
          }
      }]
  });
});







// Слик слайдеры
        jQuery('.responsive').slick({
          dots: true,
          adaptiveHeight: true,
          infinite: true,
          speed: 300,
          slidesToShow: 3,
          slidesToScroll: 3,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 769,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
        });

jQuery('.insta-photo').slick({
          dots: false,
          infinite: true,
          speed: 300,
          slidesToShow: 5,
          slidesToScroll: 1,
          centerMode: true,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 769,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
});
      jQuery('.odinochnyy-slider-prepodovatel').slick({
          dots: true,
          infinite: true,
          speed: 300,
          slidesToShow: 1,
          slidesToScroll: 1,
          adaptiveHeight: true
      });

      jQuery('.reviews-video-home').slick({
          dots: true,
          infinite: true,
          speed: 300,
          slidesToShow: 1,
          slidesToScroll: 1,
          adaptiveHeight: true
      });

      jQuery('.carusel-hot-news').slick({
          dots: true,
          infinite: true,
          arrows: false,
          speed: 300,
          slidesToShow: 1,
          slidesToScroll: 1
      });

      jQuery('.home-top-slider').slick({
          dots: true,
          infinite: true,
          arrows: true,
          speed: 300,
          slidesToShow: 1,
          slidesToScroll: 1,
          adaptiveHeight: true
      });


        jQuery('.instruments').slick({
          dots: true,
          infinite: true,
          speed: 300,
          slidesToShow: 6,
          slidesToScroll: 6,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 5,
                slidesToScroll: 5,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 4
              }
            },
            {
              breakpoint: 769,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3
              }
            }
          ]
        });

        jQuery('.worked').slick({
          dots: true,
          infinite: true,
          speed: 300,
          slidesToShow: 5,
          slidesToScroll: 5,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 4,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 4
              }
            },
            {
              breakpoint: 769,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            }
          ]
        });


        jQuery('.reviews').slick({
          dots: true,
          infinite: true,
          speed: 300,
          slidesToShow: 2,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 769,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
        });


// Слайдер для новостей
jQuery('.slider-for-news2').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav-news2'
});

jQuery('.slider-nav-news2').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for-news2',
    dots: true,
    centerMode: true,
    focusOnSelect: true
});

jQuery('.vacancies_slider').slick({
          dots: false,
          infinite: true,
          speed: 300,
          slidesToShow: 2,
          slidesToScroll: 1,
          centerMode: false,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 769,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
});



        jQuery('.vacancies_slider').slick({
          dots: true,
          adaptiveHeight: false,
          infinite: true,
          speed: 300,
          slidesToShow: 3,
          slidesToScroll: 3,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 769,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
        });
