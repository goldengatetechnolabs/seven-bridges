"use strict";
! function (p) {

  var $window = $(window);

  /* Preloader
  * ------------------------------------ */
  $(window).on('load', function () {
    $('#preloader').fadeOut('slow', function () {
      $(this).remove();
    });
  });

  /* WOW JS
  * ------------------------------------ */
  if ($window.width() > 1100) {
    new WOW().init();
  }


  /* Mobile Menu Toggle
  -------------------------------- */

  $('.mobile-toggle').click(function () {
    $(this).toggleClass('show');
    // $('.main-menu').toggleClass('show');
    //$('html').toggleClass('menushow');
  });

  // Mobile dropdown on click
  if ($window.width() <= 992) {
    $(".dropdown-toggle").click(function (e) {
      //$(this).toggleClass("show");
      if (!$(this).next(".dropdown-menu").hasClass("collapse")) {
        return $(this).next(".dropdown-menu").addClass("collapse").slideDown(300);
      } else {
        $(this).next(".dropdown-menu").removeClass("collapse").slideUp(300);
      }

    });
  }

  /* Fix header
  -------------------------------- */
  $(window).scroll(function () {
    var currentScroll = $(window).scrollTop();
    if (currentScroll >= 200) {
      $('header').addClass('sticky-bar');
    } else {
      $('header').removeClass("sticky-bar");
    }
  });


  /* Back to Top
  * -------------------------------- */
  var element = $('#scrollUp');
  $(window).scroll(function () {
    if ($(window).scrollTop() > 200) {
      element.addClass('active');
    } else {
      element.removeClass('active');
    }
  });
  element.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: 0
    }, '800');
  });


  /* Textbox focus event
  -------------------------------- */
  $('.form-control').each(function () {
    $(this).on('blur', function () {
      if ($(this).val().trim() != "") {
        $(this).addClass('has-val');
      }
      else {
        $(this).removeClass('has-val');
      }
    })
  });


  /* Accordian
  -------------------------------- */
  $(document).ready(function () {
    $('.collapse').on('show.bs.collapse', function () {
      $(this).siblings('.accordion-header').addClass('active');
    });
    $('.collapse').on('hide.bs.collapse', function () {
      $(this).siblings('.accordion-header').removeClass('active');
    });
  });


  /* Tooltip
  -------------------------------- */
  $(function () {
    $('[data-bs-toggle="tooltip"]').tooltip()
  });
  $(function () {
    $('[data-bs-toggle="popover"]').popover()
  });


  /* Carousel
  ------------------------------------ */

  var swiper = new Swiper('.client-slider', {
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    autoplay: {
      delay: 3000,
    },
    breakpoints: {
      0: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 10,
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 15,
      },
    },
  });

  var swiper = new Swiper('.security-slider', {
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    autoplay: {
      delay: 3000,
    },
    breakpoints: {
      0: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 10,
      },
      1024: {
        slidesPerView: 5,
        spaceBetween: 15,
      },
    },
  });

  var swiper = new Swiper('.testimonial-slider', {
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    
    autoplay: {
      delay: 3000,
    },
    slidesPerView: 1,
  });

  // tabs on hover

  if ($window.width() > 1100) {
    document.querySelectorAll('.tabs-block .nav-link').forEach(function(everyitem){  
    var tabTrigger = new bootstrap.Tab(everyitem)
      everyitem.addEventListener('mouseenter', function(){
        tabTrigger.show();
      });
      
    });
    function TabImg() {
      var tabAll = function() {
        var menuElements = document.querySelectorAll('[data-tab]');
        for(var i = 0; i < menuElements.length ; i++) {
          menuElements[i].addEventListener('mouseenter', changeTab, false);
        }
      }

      var clearAll = function() {
        var menuElements = document.querySelectorAll('[data-tab]');
        for(var i = 0; i < menuElements.length ; i++) {
          menuElements[i].classList.remove('active');
          var id = menuElements[i].getAttribute('data-tab');
          document.getElementById(id).classList.remove('active');
        }
      }

      var changeTab = function(e) {
        clearAll();
        e.target.classList.add('active');
        var id = e.currentTarget.getAttribute('data-tab');
        document.getElementById(id).classList.add('active');
      }

      tabAll();
    }

    var connectTabs = new TabImg();
  }

  // on click collape
  $(document).ready(function() {
      $('.collapse').on('show.bs.collapse', function () {
          $(this).siblings('.past-event').addClass('active');
      });
      $('.collapse').on('hide.bs.collapse', function () {
          $(this).siblings('.past-event').removeClass('active');
      });
  });
  $('.past-event .link').click(function() {
    if ($(this).text() == "More Details") {
      $(this).text("Less Details")
    } else {
      $(this).text("More Details")
    }
  });

}(jQuery);


