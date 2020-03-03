// Поиск
jQuery('.lux_search > .button').click(function () {
  jQuery('.search-open').toggleClass("open");
  jQuery('.search-open-bg').toggleClass("open").css({ display: 'block' });
});
jQuery('#search-modal .btnClose, #search-modal .modalClose, .icon--close').click(function () {
  jQuery('.search-open').removeClass("open");
  jQuery('.search-open-bg').removeClass("open");
  jQuery('.orig').val('');
  jQuery('.search-open-bg').css({ display: 'none' });
});
jQuery('ul.foot > li.search a').click(function () {
  jQuery('.search-open').toggleClass("open");
  jQuery('.search-open-bg').toggleClass("open").css({ display: 'block' });
});
// Конец - Поиск


jQuery(".wpcf7-form-control-wrap").click(function () {
  jQuery(this).children(".wpcf7-not-valid-tip").fadeOut('slow');
});

// Новые табы (ужасные от Насти)
jQuery('#advantage #pills-tab > li > a, #advantage #pills-tab-dtls > li > a').click(function () {
  jQuery('#advantage #pills-tab > li, #advantage #pills-tab-dtls > li').removeClass('active');
  jQuery(this).closest('li').addClass('active');
});
jQuery('#s-details #pills-tab > li > a, #s-details #pills-tab-dtls > li > a').click(function () {
  jQuery('#s-details #pills-tab > li, #s-details #pills-tab-dtls > li').removeClass('active');
  jQuery(this).closest('li').addClass('active');
});
// Новые табы (ужасные от Насти)



jQuery('.wpcf7-form-control').focus(function () {
  jQuery(this).closest('div').addClass('input-effect');
}).
  blur(function () {
    jQuery(this).closest('div').removeClass('input-effect');
  });


jQuery('.action--menu').hover(function () {
  window.initHandler = setTimeout(handler, 300);
  function handler() {
    jQuery('.action--menu').click();
    jQuery("body").removeClass("fullscreen-nav");
  }
}, function () {
  clearTimeout(window.initHandler);
});



jQuery('.tg-item-excerpt').each(function () {
  var e = jQuery(this);
  var fix = e.html().replace('�', "");
  e.html(fix);
});

// Закрытие попапа после успешной отправки формы
document.addEventListener('wpcf7mailsent', function (event) {

  if ('1073' == event.detail.contactFormId) {
    function explode() {
      jQuery(".sgpb-popup-close-button-6").click();
    }
    setTimeout(explode, 1500);
  }
}, false);

document.addEventListener('wpcf7mailsent', function (event) {

  if ('1050' == event.detail.contactFormId) {
    function explode() {
      jQuery(".sgpb-popup-close-button-6").click();
    }
    setTimeout(explode, 1500);
  }
}, false);

document.addEventListener('wpcf7mailsent', function (event) {

  if ('1172' == event.detail.contactFormId) {
    function explode() {
      jQuery(".sgpb-popup-close-button-6").click();
    }
    setTimeout(explode, 1500);
  }
}, false);
// Конец - Закрытие попапа после успешной отправки формы



// Маска для инпута номера телефона
jQuery(document).ready(function () {
  jQuery('#tel22').mask('+38 (099) 999-99-99');
  jQuery('#tel23').mask('+38 (099) 999-99-99');
  jQuery('.input-phone').mask('+38 (099) 999-99-99');
  jQuery('#tel24').mask('+38 (099) 999-99-99');
});
// Конец - Маска для инпута номера телефона


setInterval(function () { jQuery('.saleRow').toggleClass('animate') }, 3000);

jQuery(".SliderTarget").click(function () {
  var fc = jQuery(this).hasClass('checked');
  if (fc == true) {
    jQuery("#tel22").focus();
  }
});

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}


/* Light YouTube Embeds by @labnol */
/* Web: http://labnol.org/?p=27941 */

document.addEventListener("DOMContentLoaded",
  function () {
    var div, n,
      v = document.getElementsByClassName("youtube-player");
    for (n = 0; n < v.length; n++) {
      div = document.createElement("div");
      div.setAttribute("data-id", v[n].dataset.id);
      div.innerHTML = labnolThumb(v[n].dataset.id);
      div.onclick = labnolIframe;
      v[n].appendChild(div);
    }
  });

function labnolThumb(id) {
  var thumb = '<img src="https://i.ytimg.com/vi/ID/hqdefault.jpg">',
    play = '<div class="play"></div>';
  return thumb.replace("ID", id) + play;
}

function labnolIframe() {
  var iframe = document.createElement("iframe");
  var embed = "https://www.youtube.com/embed/ID?autoplay=1";
  iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
  iframe.setAttribute("frameborder", "0");
  iframe.setAttribute("allowfullscreen", "1");
  this.parentNode.replaceChild(iframe, this);
}


jQuery(document).ready(function ($) {
  var contentSections = jQuery('.cd-section'),
    navigationItems = jQuery('#cd-vertical-nav a');

  updateNavigation();
  jQuery(window).on('scroll', function () {
    updateNavigation();
  });

  //smooth scroll to the section
  navigationItems.on('click', function (event) {
    event.preventDefault();
    smoothScroll(jQuery(this.hash));
  });
  //smooth scroll to second section
  jQuery('.cd-scroll-down').on('click', function (event) {
    event.preventDefault();
    smoothScroll(jQuery(this.hash));
  });

  function updateNavigation() {
    contentSections.each(function () {
      $this = jQuery(this);
      var activeSection = jQuery('#cd-vertical-nav a[href="#' + $this.attr('id') + '"]').data('number') - 1;
      if (($this.offset().top - jQuery(window).height() / 2 < jQuery(window).scrollTop()) && ($this.offset().top + $this.height() - jQuery(window).height() / 2 > jQuery(window).scrollTop())) {
        navigationItems.eq(activeSection).addClass('is-selected');
      } else {
        navigationItems.eq(activeSection).removeClass('is-selected');
      }
    });
  }

  function smoothScroll(target) {
    jQuery('body,html').animate(
      { 'scrollTop': target.offset().top - 86 },
      600
    );
  }
});

// Megamenu by delux 11.02.2019



jQuery(document).ready(function () {
  "use strict";
  jQuery('.menu-smart > ul > li:has( > ul)').addClass('menu-dropdown-icon');
  jQuery('.menu-smart > ul > li > ul:not(:has(ul))').addClass('normal-sub');
  jQuery(".menu-smart > ul").before("<a href=\"#\" class=\"menu-mobile\"></a> ");
  jQuery(".menu-smart > ul > li").hover(
    function (e) {
      if (jQuery(window).width() > 976) {
        jQuery(this).children("ul").stop().fadeIn(150);
        e.preventDefault();
      }
    }, function (e) {
      if (jQuery(window).width() > 976) {
        jQuery(this).children("ul").stop().fadeOut(150);
        e.preventDefault();
      }
    }
  );
  jQuery(document).on('click', function (e) {
    if (jQuery(e.target).parents('.menu-smart').length === 0)
      jQuery(".menu-smart > ul").removeClass('show-on-mobile');
  });

  jQuery(".menu-smart > ul > li").click(function () {
    var thisMenu = jQuery(this).children("ul");
    var prevState = thisMenu.css('display');
    jQuery(".menu-smart > ul > li > ul").fadeOut();
    if (jQuery(window).width() < 976) {
      if (prevState !== 'block')
        thisMenu.fadeIn(150);
    }
  });
  jQuery(".menu-mobile").click(function (e) {
    jQuery(".menu-smart > ul").toggleClass("show-on-mobile");
    e.preventDefault();
  });
});


// Megamenu by delux 11.02.2019


// Circle by Alexander O
jQuery('.tab_1').hover(function () {
  jQuery('.circle-content > div').removeClass('active');
  jQuery('.tabs > div').removeClass('info-circle-pulse');
  jQuery(this).addClass('info-circle-pulse');
  jQuery('.circle_tab_1').addClass('active').fadeIn(500);
});


jQuery('.tab_2').hover(function () {
  jQuery('.circle-content > div').removeClass('active');
  jQuery('.tabs > div').removeClass('info-circle-pulse');
  jQuery(this).addClass('info-circle-pulse');
  jQuery('.circle_tab_2').addClass('active').fadeIn(500);
});

jQuery('.tab_3').hover(function () {
  jQuery('.circle-content > div').removeClass('active');
  jQuery('.tabs > div').removeClass('info-circle-pulse');
  jQuery(this).addClass('info-circle-pulse');
  jQuery('.circle_tab_3').addClass('active').fadeIn(500);
});

jQuery('.tab_4').hover(function () {
  jQuery('.circle-content > div').removeClass('active');
  jQuery('.tabs > div').removeClass('info-circle-pulse');
  jQuery(this).addClass('info-circle-pulse');
  jQuery('.circle_tab_4').addClass('active').fadeIn(500);
});

jQuery('.tab_5').hover(function () {
  jQuery('.circle-content > div').removeClass('active');
  jQuery('.tabs > div').removeClass('info-circle-pulse');
  jQuery(this).addClass('info-circle-pulse');
  jQuery('.circle_tab_5').addClass('active').fadeIn(500);
});

jQuery('.tab_6').hover(function () {
  jQuery('.circle-content > div').removeClass('active');
  jQuery('.tabs > div').removeClass('info-circle-pulse');
  jQuery(this).addClass('info-circle-pulse');
  jQuery('.circle_tab_6').addClass('active').fadeIn(500);
});


function resizeBlock() {
  if (window.matchMedia("screen and (max-width: 992px)").matches) {
    jQuery('.circle_tab_1').append(jQuery('.tab_1'));
    jQuery('.circle_tab_2').append(jQuery('.tab_2'));
    jQuery('.circle_tab_3').append(jQuery('.tab_3'));
    jQuery('.circle_tab_4').append(jQuery('.tab_4'));
    jQuery('.circle_tab_5').append(jQuery('.tab_5'));
    jQuery('.circle_tab_6').append(jQuery('.tab_6'));
  }
  else if (window.matchMedia("screen and (min-width: 992px)").matches) {
    jQuery('.tabs').append(jQuery('.tab_1'));
    jQuery('.tabs').append(jQuery('.tab_2'));
    jQuery('.tabs').append(jQuery('.tab_3'));
    jQuery('.tabs').append(jQuery('.tab_4'));
    jQuery('.tabs').append(jQuery('.tab_5'));
    jQuery('.tabs').append(jQuery('.tab_6'));
  }
}

jQuery(window).resize(function () {
  resizeBlock();
});

jQuery(document).ready(function () {
  resizeBlock();
});
// End Circle by Alexander O

// Start Аккордеон - СМАРТ
jQuery('.acc > ul').hide();
jQuery('.acc').on('click', function (e) {
  e.preventDefault();

  jQuery('.acc > ul').stop().slideUp('slow');
  jQuery(this).children('ul').stop().slideToggle('slow');
  jQuery(this).find('h4').toggleClass('arrow');
});
// End Аккордеон - СМАРТ

// Выделение цифр в блоках

var blocks_start = jQuery('#similar_courses');

if (blocks_start.length >= 1) {
  date_text_start = jQuery(".similar_blocks .date-start").html().replace(/([0-9]+)/g, '<span>$1</span>');
  jQuery(".similar_blocks .date-start").html(date_text_start);
}


// Выделение цифр в блоках


// Start show-hide text (Сворачивание текста)
jQuery('#button').html('Подробнее');
jQuery('#button').on('click', function (e) {
  console.log("click");
  e.preventDefault();

  var this_s = jQuery(this), content = jQuery('#hide');


  if (!this_s.hasClass('trigger')) {
    jQuery('.visible:after').css({ 'display': 'none' });
    this_s.addClass('trigger');
    this_s.html('Скрыть');

    content.slideDown();
  } else {
    this_s.removeClass('trigger');
    jQuery('.visible:after').css({ 'display': 'block' });
    this_s.html('Подробнее');

    content.slideUp();
  }
});
// End show-hide text

(function ($) {

  jQuery(document).ready(function () {

    /* all available option parameters with their default values */
    jQuery(".about-text").mCustomScrollbar({
      setWidth: false,
      setHeight: false,
      setTop: 0,
      setLeft: 0,
      axis: "y",
      scrollbarPosition: "inside",
      scrollInertia: 950,
      autoDraggerLength: true,
      autoHideScrollbar: false,
      autoExpandScrollbar: false,
      alwaysShowScrollbar: 0,
      snapAmount: null,
      snapOffset: 0,
      mouseWheel: {
        enable: true,
        scrollAmount: "auto",
        axis: "y",
        preventDefault: false,
        deltaFactor: "auto",
        normalizeDelta: false,
        invert: false,
        disableOver: ["select", "option", "keygen", "datalist", "textarea"]
      },
      scrollButtons: {
        enable: false,
        scrollType: "stepless",
        scrollAmount: "auto"
      },
      keyboard: {
        enable: true,
        scrollType: "stepless",
        scrollAmount: "auto"
      },
      contentTouchScroll: 25,
      advanced: {
        autoExpandHorizontalScroll: false,
        autoScrollOnFocus: "input,textarea,select,button,datalist,keygen,a[tabindex],area,object,[contenteditable='true']",
        updateOnContentResize: true,
        updateOnImageLoad: true,
        updateOnSelectorChange: false,
        releaseDraggableSelectors: false
      },
      theme: "light",
      callbacks: {
        onInit: false,
        onScrollStart: false,
        onScroll: false,
        onTotalScroll: false,
        onTotalScrollBack: false,
        whileScrolling: false,
        onTotalScrollOffset: 0,
        onTotalScrollBackOffset: 0,
        alwaysTriggerOffsets: true,
        onOverflowY: false,
        onOverflowX: false,
        onOverflowYNone: false,
        onOverflowXNone: false
      },
      live: false,
      liveSelector: null
    });

  });
})(jQuery);

jQuery(document).ready(function () {
  jQuery('.progress .progress-bar').css("width",
    function () {
      return jQuery(this).attr("aria-valuenow") + "%";
    }
  )
});


// Scroll Magic code.
jQuery(function () { // wait for document ready

  // init
  var controller = new ScrollMagic.Controller({
    globalSceneOptions: { duration: "70%" }
  });

  new ScrollMagic.Scene({
    triggerElement: "#details"
  })
    .setClassToggle(".progress-bar", "active")
    .addTo(controller);
});


// Выключение видео при закрытии модалки
jQuery(document).ready(function () {
  jQuery('#exampleModalCenter').on('hidden.bs.modal', function () {
    var $this = jQuery(this).find('iframe'),
      tempSrc = $this.attr('src');
    $this.attr('src', "");
    $this.attr('src', tempSrc);
  });
});
// Выключение видео при закрытии модалки




// Уменьшение меню при прокрутке страницы
jQuery(window).scroll(function () {
  if (jQuery(window).scrollTop() > 100) {
    jQuery('body').addClass('min-menu');
  } else {
    jQuery('body').removeClass('min-menu');
  }
});
// Конец - Уменьшение меню при прокрутке страницы

/* define elemhide and elemshow */
var elemhide = jQuery('.hide-menu'),
  elemshow = jQuery('.show-menu, .show-menu2');

/* click functions */
elemhide.on('click', function (e) {

  e.preventDefault();

  /* cookie = 1 week */
  var date = new Date();
  date.setTime(date.getTime() + (1000 * 60 * 60 * 24 * 7));
  jQuery.cookie('menu_cookie', '0', { expires: date, path: '/' });

  /* set classes */
  jQuery('#header').removeClass('d-none');
  jQuery('#smart-header').addClass('d-none');
  jQuery(this).addClass('marg');
  jQuery('body').addClass('old-menu');
  setTimeout(function () {
    try {
      reconstructRn();
    } catch (err) {
      // do something
    }
    window.dispatchEvent(new Event('resize'));
    elemshow.addClass('active');
    elemhide.removeClass('active');
  }, 10);

});

elemshow.on('click', function (e) {

  e.preventDefault();

  /* cookie = 1 week */
  var date = new Date();
  date.setTime(date.getTime() + (1000 * 60 * 60 * 24 * 7));
  jQuery.cookie('menu_cookie', '1', { expires: date, path: '/' });

  /* set classes */
  jQuery('#header').addClass('d-none');
  jQuery('#smart-header').removeClass('d-none');
  jQuery(this).removeClass('marg');
  jQuery('body').removeClass('old-menu');

  elemshow.removeClass('active');
  elemhide.addClass('active');

  setTimeout(function () {
    try {
      reconstructRevolution();
    } catch (err) {
      // do something
    }
  }, 10);

});

/* check for existing cookie */
if (!jQuery.cookie('menu_cookie') || jQuery.cookie('menu_cookie') == 0) {
  jQuery('.hide-menu').trigger('click');
} else if (jQuery.cookie('menu_cookie') == 1) {
  jQuery('.show-menu').trigger('click');
}


// Show/toggle for courses program
jQuery('#new-program .text > button').click(function (event) {
  jQuery(this).closest('div.text').children('ul').slideToggle('slow');
  jQuery(this).closest('div.text').parent('div').toggleClass('open');
  var has_home_prog = jQuery('#new-program .text > button').closest('#new-program').hasClass('home');
  if (has_home_prog == false) {
    if (jQuery(this).html() == 'Показать <i class="fa fa-angle-down" aria-hidden="true"></i>') {
      jQuery(this).html('Свернуть <i class="fa fa-angle-up" aria-hidden="true">');
    } else {
      jQuery(this).html('Показать <i class="fa fa-angle-down" aria-hidden="true">');
    };
  } else {
    if (jQuery(this).html() == 'Показать <i class="fa fa-angle-double-down" aria-hidden="true"></i>') {
      jQuery(this).html('Свернуть <i class="fa fa-angle-double-up" aria-hidden="true">');
    } else {
      jQuery(this).html('Показать <i class="fa fa-angle-double-down" aria-hidden="true"></i>');
    };
  }
});


var desc_short = function () {
  jQuery("p.short").text(function (i, text) {
    if (text.length >= 30) {
      var textTmp = text.substring(0, 50);
      var lastIndex = textTmp.lastIndexOf(" ");       // позиция последнего пробела

      text = text.substring(0, lastIndex) + '<span class="wrap">' + text.substring(lastIndex, text.length - 0) + '</span>'; // обрезаем до последнего слова
    }
    jQuery(this).html(text);
  });
};

desc_short();



jQuery('#summer-program .cont-block > button').click(function (event) {
  jQuery(this).closest('div.cont-block').children('ul, p, span, div').slideToggle('slow');
  jQuery(this).closest('div.block').toggleClass('open');
  jQuery(this).closest('div.block').children('p.short').toggleClass("active");
  if (jQuery(this).html() == 'Показать <i class="fa fa-angle-double-down" aria-hidden="true"></i>') {
    jQuery(this).html('Свернуть <i class="fa fa-angle-double-up" aria-hidden="true">');
  } else {
    jQuery(this).html('Показать <i class="fa fa-angle-double-down" aria-hidden="true"></i>');
    // desc_short();
  };
});

// End - Show/toggle for courses program

// Tooltip bootstrap
jQuery(document).ready(function () {
  // Tooltips
  jQuery('.tip').each(function () {
    jQuery(this).tooltip(
      {
        html: true,
        title: jQuery('#' + jQuery(this).data('tip')).html()
      });
  });
});
// End - Tooltip bootstrap



// Footer locations menu

jQuery(document).ready(function () {

  "use strict";

  jQuery('ul.s-icons-two > li > ul:not(:has(ul))').addClass('normal-sub');
  jQuery("ul.s-icons-two > li").hover(
    function (e) {
      if (jQuery(window).width() > 320) {
        jQuery('ul.s-icons-two > li').removeClass('active');
        jQuery(this).children("ul").stop().fadeIn(0);
        jQuery(this).addClass('active');
        e.preventDefault();
      }
    }, function (e) {
      if (jQuery(window).width() > 320) {
        jQuery(this).children("ul").stop().fadeOut(0);
        e.preventDefault();
      }
    }
  );
  jQuery(document).on('click', function (e) {
    if (jQuery(e.target).parents('#smart-header').length === 0)
      jQuery("ul.s-icons-two").removeClass('show-on-mobile');
  });
});



jQuery('.s-intensiv').ready(function ($) {
  jQuery('#branches .center-tab').click(function (event) {
    jQuery('#summer-program .content > div.topol').hide(100);
    jQuery('#summer-program .content > div.center').show(100);
    jQuery(this).addClass('active');
    jQuery('#branches .topol-tab').removeClass('active');
  });
  jQuery('#branches .topol-tab').click(function (event) {
    jQuery('#summer-program .content > div.topol').show(100);
    jQuery('#summer-program .content > div.center').hide(100);
    jQuery(this).addClass('active');
    jQuery('#branches .center-tab').removeClass('active');
  });
});


// Спойлер для страницы контактов
jQuery('.spoiler > .cont').hide();
jQuery('.spoiler > .head').on('click', function (e) {
  e.preventDefault();

  jQuery('.spoiler > .cont').stop().slideUp('slow');
  jQuery(this).parent('div.spoiler').children('.cont').stop().slideToggle('slow');
  jQuery(this).toggleClass('active');
});
// jQuery('.team_hex > div > div > div:not(:has(.b-center)').each(function() {





jQuery(window).load(function () {


  var b_maxsize = jQuery('.team_hex .b4.b-center').width();
  var tablet_size = window.innerWidth;

  if (tablet_size >= 992) {
    jQuery('.team_hex > div > div').children('div').not('.b-center').each(function () {
      jQuery(this).css({
        'max-width': b_maxsize + 'px'
      });
    });
  };



  jQuery(window).on("resize", function () {
    var b_maxsize = jQuery('.team_hex .b4.b-center').width();
    var tablet_size = window.innerWidth;

    if (tablet_size >= 992) {
      jQuery('.team_hex > div > div').children('div').not('.b-center').each(function () {
        jQuery(this).css({
          'max-width': b_maxsize + 'px'
        });
      });
    }
  });


});






jQuery(document).ready(function () {
  var linkReg = window.location.href.indexOf("#open-reg") > -1;
  var linkGl = window.location.href.indexOf("#google") > -1;
  var linkFb = window.location.href.indexOf("#fb") > -1;
  var linkMail = window.location.href.indexOf("#mail") > -1;
  var event_img = jQuery('.post-image img').attr('src');
  var event_mail = jQuery('.event_mail').text();
  var event_price = jQuery('.event_price').text();
  var event_date = jQuery('.event_date').text();
  var event_location = jQuery('.event_location').text();
  var event_time = jQuery('.event_time').text();
  var link_liqpay = jQuery('.post-form-block > .liqpay').text();

  if (linkFb == true) {
    jQuery("#open-reg .sg-show-popup").click();
    jQuery('#hash').val('Facebook (fb)');
  } else if (linkGl == true) {
    jQuery("#google .sg-show-popup").click();
    jQuery('#hash').val('Google my business (google)');
  } else if (linkReg == true) {
    jQuery("#open-reg .sg-show-popup").click();
    jQuery('#hash').val('Внешние ресурсы (open-reg)');
  } else if (linkMail == true) {
    jQuery("#open-reg .sg-show-popup").click();
    jQuery('#hash').val('Почтовые рассылки (mail)');
  } else {
    jQuery('#hash').val('С новости');
  }

  jQuery('#event_img').val(event_img);
  jQuery('#link_liqpay').val(link_liqpay);
  jQuery('#event_mail').val(event_mail);
  jQuery('#event_price').val(event_price);
  jQuery('#event_location').val(event_location);
  jQuery('#event_date').val(event_date);
  jQuery('#event_time').val(event_time);
});




// Сокращение заголовков у новостей
var desc_short = function () {
  jQuery(".tg-item-title.tg-element-3 > a").text(function (i, text) {
    if (text.length >= 50) {
      text = text.substring(0, 50);
      var lastIndex = text.lastIndexOf(" ");       // позиция последнего пробела
      text = text.substring(0, lastIndex) + '...'; // обрезаем до последнего слова
    }
    jQuery(this).text(text);
  });
};

desc_short();
// Сокращение заголовков у новостей





// Новая модалка на смарт (со смартиком)
jQuery('.smart_modal_btn').click(function () {
  jQuery('.smart_modal').show();
  setTimeout(function () {
    jQuery('.smart_modal').addClass("open");
  }, 200);
  jQuery('.smart_modal-bg').fadeIn().addClass("open").css({ display: 'block' });
});
jQuery('.smart_modal .close-icon-new, .smart_modal-bg').click(function () {
  jQuery('.smart_modal').removeClass("open");
  setTimeout(function () {
    jQuery('.smart_modal').hide();
  }, 200);
  jQuery('.smart_modal-bg').removeClass("open");
  jQuery('.smart_modal-bg').css({ display: 'none' });
});
// Новая модалка на смарт (со смартиком)




// Всплывающаяя модалка мероприятия
// jQuery(document).ready(function(){
// jQuery(".event_modal .close-icon-new").click(function () {
// jQuery.cookie("popup-event", "", { expires:1, path: '/' });

//         jQuery('.event_modal').removeClass("open");
//         setTimeout(function(){
//              jQuery('.event_modal').hide();
//         }, 100);
//         jQuery('.event_modal-bg').removeClass("open");
//         jQuery('.event_modal-bg').css({display: 'none'});

// });

// if ( jQuery.cookie("popup-event") == null )
// {
// setTimeout(function(){

//         jQuery('.event_modal').show();
//         setTimeout(function(){
//              jQuery('.event_modal').addClass("open");
//         }, 200);
//         jQuery('.event_modal-bg').fadeIn().addClass("open").css({display: 'block'});

// }, 12000)
// }
// else {
//   jQuery(".event_modal").hide();
// }
// });
// Всплывающаяя модалка мероприятия


// Antispam CF7
jQuery('.d-none').prop('checked', false);






jQuery(document).ready(function () {

  jQuery('.team_hex > div > div').children('div').not('.b-center').click(function () {
    var data_id = jQuery(this).attr('data-id');

    jQuery('.team_hex > div > div').children('div').removeClass('active').removeClass('info-circle-pulse');
    jQuery('.team_hex .team_descr').removeClass('active');

    jQuery(this).addClass('active').addClass('info-circle-pulse');
    jQuery("#" + data_id).addClass('active');
  });

});


function smart_img_layers() {
  jQuery('.smart_module_img_layer').each(function () {
    var container = jQuery(this);
    var initImageLayers = function () {
      container.appear(function () {
        container.addClass('img_layer_animate');
      }, { done: true });
    };
    jQuery(window).on('resize', initImageLayers);
    jQuery(window).on('load', initImageLayers);
  });
}


jQuery(document).ready(function ($) {
  smart_img_layers();
});

jQuery('.extended-parallax').paroller();


jQuery('.vac-modal .form-link a').click(function (event) {
  jQuery(this).toggleClass('active');
  jQuery(this).closest('div.vac-modal').children('div.text').stop().slideToggle('slow');
  jQuery(this).closest('div.vac-modal').children('div.form-expand').stop().slideToggle('slow');
  event.preventDefault();
});

jQuery('.vac-modal').each(function () {
  var vac_position = jQuery(this).find('.text').children('h4').text();
  jQuery(".p-position", this).val(vac_position);
});





jQuery(document).ready(function () {
  var linkEventPopup = window.location.href.indexOf("#discont") > -1;

  if (linkEventPopup == true) {
    jQuery(".event-modal-btn").click();
  }
});


// Поиск
jQuery('.event-modal-btn').click(function () {
  jQuery('.event_modal').show().toggleClass("open");
  jQuery('.event_modal-bg').toggleClass("open").css({ display: 'block' });
});
// Конец - Поиск







// Меню для мобильных устройств
jQuery(function () {
  var trigger_show = jQuery('.head-menu-btn-mobile');
  var trigger_hide = jQuery('.smart_mobile_menu_btn_hide');
  var sndwch = jQuery('#smart_mobile_menu');

  if (!sndwch.length) return;
  jQuery(trigger_show).one('click', function () {
    _showMenu();
  });

  function _showMenu() {
    trigger_show.toggleClass('smart_mobile_menu_shown');
    trigger_hide.toggleClass('smart_mobile_menu_shown');
    sndwch.stop(1, 1).fadeIn(function () {
      jQuery(trigger_hide).one('click', function () {
        _hideMenu();
      });
    });
    _resizeSndwch();
  }

  function _hideMenu() {
    trigger_show.toggleClass('smart_mobile_menu_shown');
    trigger_hide.toggleClass('smart_mobile_menu_shown');
    sndwch.stop(1, 1).fadeOut(function () {
      jQuery(trigger_show).one('click', function () {
        _showMenu();
      });
    });
  }

  function _resizeSndwch() {
    sndwch.find('.smart_mobile_menu-menu')
      .css(
        'margin-top',
        ((sndwch.height() - sndwch.find('.smart_mobile_menu-menu').height()) / 2) + "px"
      );
  }
  jQuery(window).resize(_resizeSndwch);
});

setTimeout(function () {
  jQuery(window).scrollTop(100);
  setTimeout(function () {
    jQuery(window).scrollTop(0);
  }, 10);
}, 100);

jQuery("#listCourses").click(function () {
  jQuery(".buttonModalCourses").click();
  jQuery(".smart_mobile_menu_shown").click();
});
// Конец - меню для мобильных устройств





// For new FullScreen Menu
jQuery(document).on('click', '.head-menu-btn', function () {
  jQuery('.smart-menu').addClass('show');
  jQuery('body').addClass('open-smart-menu');
});
jQuery(document).on('click', '.smart-menu-close', function () {
  jQuery('.smart-menu').removeClass('show');
  jQuery('body').removeClass('open-smart-menu');
  return false;
});
// End - For new FullScreen Menu


// Высота шапки при прокрутке
jQuery(function () {
  jQuery(window).scroll(function () {
    var topHead = jQuery(document).scrollTop();
    if (topHead > 70) {
      jQuery('#header').removeClass('header-color');
    } else {
      jQuery('#header').addClass('header-color');
    }
  });
});
// End - Высота шапки при прокрутке







jQuery(document).ready(function () {
  var $videoSrc;
  jQuery('.smart-video-btn').click(function () {
    $videoSrc = jQuery(this).data("src");
  });
  console.log($videoSrc);
  jQuery('#mySmartModal').on('shown.bs.modal', function (e) {
    jQuery("#smart-video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
  })
  jQuery('#mySmartModal').on('hide.bs.modal', function (e) {
    jQuery("#smart-video").attr('src', $videoSrc);
  })
});


jQuery('#courses_cards .card .btn-block a').on('click', function () {
  var course_name = jQuery(this).closest('.card').find('h4').text();
  jQuery('.sgpb-main-html-content-wrapper .wpcf7-form .course-name input.required').val(course_name);
  jQuery('.sgpb-main-html-content-wrapper .wpcf7-form .course-name-title').removeClass('d-none').children('span').text(course_name);
  // console.log(course_name)
});

