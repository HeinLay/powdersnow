$(document).ready(function () {
  function setHeight() {
    $headerHeight = $('header').outerHeight();
    $content = $('.sec-mv');
    $sideNav = $('.header-nav');
    $content.css('margin-top', $headerHeight);
    $sideNav.css({
      'top': 'calc(' + $headerHeight + 'px - 2.2px)'
    });
  }
  setHeight();
  $(window).resize(function () {
    setHeight();
  });

    setTimeout(function () {
        if (location.hash) {
            window.scrollTo(0, 0);
            target = location.hash.split('#');
            smoothScrollTo($('#' + target[1]));
        }
    }, 1);

    $('#column-tabs-nav li a[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
            location.hostname == this.hostname) {
            smoothScrollTo($(this.hash));
            return false;
        }
    });

    function smoothScrollTo(target) {
        headerHeight = $('header').outerHeight();
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
            $('html,body').animate({
                scrollTop: target.offset().top - headerHeight
            }, 1000);
        }
    }

  /* Chat Bot Button */
  var chatbotbtn = $('#chatbot-btn');

  $(window).scroll(function () {
    if ($(window).scrollTop() > 1200) {
      chatbotbtn.addClass('show');
    } else {
      chatbotbtn.removeClass('show');
    }
  });

  /* Side Navigation Toggle */
  $('.menu-ico').on('click', function () {
    $(this).toggleClass('active');
    $('.header-nav').fadeToggle('is-show');
  });

  
  /* Dropdown menu */

  if (window.matchMedia('(min-width: 1024.9px)').matches) {
    $('#menu-item-77').hover(function () {
        $(this).children('ul').stop(true, false, true).slideToggle(700);
    });
}
else {
    $('#menu-item-77').click(function () {
      $(this).children('ul').slideToggle(700);
    });
}

  /* Accordion */
  $('.faq-head').click(function () {
    if ($('.faq-body').is(':visible')) {
      $('.faq-body').slideUp(300);
      $('.faq-head').removeClass('active');
    }
    if ($(this).next('.faq-body').is(':visible')) {
      $(this).next('.faq-body').slideUp(300);
      $('.faq-body').addClass('active');
      $('.faq-head').removeClass('active');
    } else {
      $(this).next('.faq-body').slideDown(300);
      $(this).toggleClass('active');
      $('.faq-body').addClass('active');
    }
  });

  /* App Slider */
  $('.works-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    infinite: true,
    speed: 300,
    autoplay: false,
    arrows: true,
    centerMode: false,
    variableWidth: true,
    cssEase: 'linear',
    draggable: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 1280,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          duration: 0.5,
          variableWidth: false,
          centerMode: false,
        }
      },
      {
        breakpoint: 767.9,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          duration: 0.5,
          variableWidth: false,
          centerMode: false,
        }
      }
    ]
  });
 
});

/**
 * internal linkスムーズスクロール
 */
$(function () {
  $headerHeight = $('header').outerHeight();
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
      location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top - $headerHeight
        }, 1000);
        return false;
      }
    }
  });
});