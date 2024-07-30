(function ($) {
  "use strict";


  //Preloader
  jQuery(window).on('load', function () {
    $(".egns-preloader").delay(1600).fadeOut("slow");
  });

  $('.close-btn').on("click", function () {
    $('.egns-preloader').addClass('close');
  });

  // scroll up button  

  if (egens_frontend_ajax_handler_params.is_egns_core_enable) {
    let calcScrollValue = () => {
      let scrollProgress = document.getElementById("progress");
      let progressValue = document.getElementById("progress-value");
      let pos = document.documentElement.scrollTop;
      let calcHeight =
        document.documentElement.scrollHeight -
        document.documentElement.clientHeight;
      let scrollValue = Math.round((pos * 100) / calcHeight);
      if (pos > 100) {
        scrollProgress.style.display = "grid";
      } else {
        scrollProgress.style.display = "none";
      }
      scrollProgress.addEventListener("click", () => {
        document.documentElement.scrollTop = 0;
      });
      scrollProgress.style.background = `conic-gradient(#8db752 ${scrollValue}%, #d7d7d7 ${scrollValue}%)`;
    };
    window.onscroll = calcScrollValue;
    window.onload = calcScrollValue;
  }

  // niceSelect
  $('select:not(.country_select,.state_select)').niceSelect();


  // datepicker
  jQuery('#datepicker').datepicker({
    format: 'dd-mm-yyyy',
    startDate: '+1d',
  });

  // custom date datepicker
  jQuery('#customDateDatepicker').datepicker({
    format: 'dd-mm-yyyy',
    startDate: '+1d',
    onSelect: function () {
      $('#customTourBookingDate').val(this.value);
    }
  });


  // sticky header
  window.addEventListener("scroll", function () {
    if (document.querySelector("header.style-1")) {
      const header_one = document.querySelector('header.style-1');
      header_one.classList.toggle("sticky", window.scrollY > 0);
    }
  });
  window.addEventListener("scroll", function () {
    if (document.querySelector("header.style-2")) {
      const header_two = document.querySelector('header.style-2');
      header_two.classList.toggle("sticky", window.scrollY > 0);
    }
  });
  window.addEventListener("scroll", function () {
    if (document.querySelector("header.style-3")) {
      const header_three = document.querySelector('header.style-3');
      header_three.classList.toggle("sticky", window.scrollY > 0);
    }
  });
  window.addEventListener("scroll", function () {
    if (document.querySelector("header.style-4")) {
      const header_four = document.querySelector('header.style-4');
      header_four.classList.toggle("sticky", window.scrollY > 0);
    }
  });
  window.addEventListener("scroll", function () {
    if (document.querySelector("header.style-5")) {
      const header_five = document.querySelector('header.style-5');
      header_five.classList.toggle("sticky", window.scrollY > 0);
    }
  });
  // mobile-search-area
  $('.search-btn').on("click", function () {
    $('.mobile-search').addClass('slide');
  });

  $('.search-cross-btn').on("click", function () {
    $('.mobile-search').removeClass('slide');
  });

  // mobile-menu
  $('.mobile-menu-btn').on("click", function () {
    $('.main-nav').addClass('show-menu');
  });

  $('.menu-close-btn').on("click", function () {
    $('.main-nav').removeClass('show-menu');
  });


  // mobile-menu header 3
  $('.mobile-menu-btn').on("click", function () {
    $('.main-box').addClass('show-menu');
  });
  $('.menu-close-btn').on("click", function () {
    $('.main-box').removeClass('show-menu');
  });


  $('ul.pagination li').on("click", function () {
    $('html, body').animate({
      scrollTop: 600
    }, 'fast');
    return true;
  });

  // mobile-drop-down
  $(".main-nav .bi").on('click', function (event) {
    var $fl = $(this);
    $(this).parent().siblings().find('.sub-menu').slideUp();
    $(this).parent().siblings().find('.bi').addClass('bi-chevron-down');
    if ($fl.hasClass('bi-chevron-down')) {
      $fl.removeClass('bi-chevron-down').addClass('bi-chevron-up');
    } else {
      $fl.removeClass('bi-chevron-up').addClass('bi-chevron-down');
    }
    $fl.next(".sub-menu").slideToggle();
  });
  // Quantity plus minus
  $(document).on('click', 'button.plus, button.minus', function () {
    console.log('Hello');
    var qty = $(this).parent('.quantity').find('.qty');
    var val = parseFloat(qty.val());
    var max = parseFloat(qty.attr('max'));
    var min = parseFloat(qty.attr('min'));
    var step = parseFloat(qty.attr('step'));
    if (egns_theme_options.is_cart) {
      var min_qty = 1;
    } else if (egns_theme_options.is_product) {
      var min_qty = 0;
    }
    if ($(this).is('.plus')) {
      if (max && (max <= val)) {
        qty.val(max).change();
      } else {
        qty.val(val + step).change();
      }
    } else {
      if (min && (min >= val)) {
        qty.val(min).change();
      } else if (val > min_qty) {
        qty.val(val - step).change();
      }
    }
  })
  // Menu Toggle button sidebar
  var toggleIcon = document.querySelectorAll('.sidebar-btn')
  var closeIcon = document.querySelectorAll('.cross-icon')
  var searchWrap = document.querySelectorAll('.menu-toggle-btn-full-shape')

  toggleIcon.forEach((element) => {
    element.addEventListener('click', () => {
      document.querySelectorAll('.menu-toggle-btn-full-shape').forEach((el) => {
        el.classList.add('show-sidebar')
      })
    })
  })
  closeIcon.forEach((element) => {
    element.addEventListener('click', () => {
      document.querySelectorAll('.menu-toggle-btn-full-shape').forEach((el) => {
        el.classList.remove('show-sidebar')
      })
    })
  })

  window.onclick = function (event) {
    // Menu Toggle button sidebar
    searchWrap.forEach((el) => {
      if (event.target === el) {
        el.classList.remove('show-sidebar')
      }
    })
  }



  // banner2
  var swiper = new Swiper(".mySwiper", {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    autoplay: true,
    watchSlidesProgress: true,
  });

  var swiper2 = new Swiper(".mySwiper2", {
    spaceBetween: 10,
    autoplay: true,
    effect: 'fade',
    navigation: {
      nextEl: ".banner2-next",
      prevEl: ".banner2-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });

  var swiper = new Swiper(".banner1-slider", {
    slidesPerView: 1,
    speed: 1200,
    spaceBetween: 15,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    autoplay: true,
    loop: true,
    roundLengths: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: 'true',
    },
    navigation: {
      nextEl: '.banner1-prev',
      prevEl: '.banner1-next',
    },
  });

  var swiper = new Swiper(".banner2-slider", {
    slidesPerView: 1,
    speed: 1200,
    spaceBetween: 15,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    loop: true,
    roundLengths: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: 'true',
    },
    navigation: {
      nextEl: '.banner1-prev',
      prevEl: '.banner1-next',
    },
  });

  // banner4-slider
  var swiper = new Swiper(".banner4-slider", {
    slidesPerView: 1,
    speed: 1200,
    spaceBetween: 15,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    autoplay: true,
    loop: true,
    pagination: {
      el: ".swiper-banner-pagination",
      clickable: true,
    },
  });

  // banner5-slider
  var swiper = new Swiper(".banner5-slider", {
    slidesPerView: 1,
    speed: 1200,
    spaceBetween: 15,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    autoplay: true,
    loop: true,
    pagination: {
      el: ".swiper-pagination-number",
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + (index + 1) + "</span>";
      },
    },
  });

  // best-plan-slider
  var swiper = new Swiper(".best-plan-slider", {
    slidesPerView: 1,
    speed: 1200,
    spaceBetween: 25,
    loop: true,
    roundLengths: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: 'true',
    },
    navigation: {
      nextEl: '.plan1-prev',
      prevEl: '.plan1-next',
    },
    breakpoints: {
      280: {
        slidesPerView: 1,
        navigation: false,
      },
      576: {
        slidesPerView: 2,
        navigation: false,
      },
      768: {
        slidesPerView: 2,
        navigation: false,
      },
      992: {
        slidesPerView: 3
      },
      1200: {
        slidesPerView: 3
      },
    }
  });


  // offer-slider
  var swiper = new Swiper(".offer-slider", {
    slidesPerView: 1,
    speed: 1200,
    spaceBetween: 25,
    autoplay: true,
    loop: true,
    roundLengths: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: 'true',
    },
    navigation: false,
    breakpoints: {
      280: {
        slidesPerView: 1,
        navigation: false,
      },
      576: {
        slidesPerView: 1,
        navigation: false,
      },
      768: {
        slidesPerView: 2,
        navigation: false,
      },
      992: {
        slidesPerView: 3
      },
      1200: {
        slidesPerView: 3
      },
    }
  });

  // partner-slider
  var swiper = new Swiper(".partner-slider", {
    slidesPerView: 2,
    speed: 1200,
    spaceBetween: 20,
    autoplay: true,
    loop: true,
    roundLengths: true,

    breakpoints: {
      280: {
        slidesPerView: 2,
        navigation: false,
      },
      320: {
        slidesPerView: 2,
        navigation: false,
      },
      576: {
        slidesPerView: 3,
        navigation: false,
      },
      768: {
        slidesPerView: 4,
        navigation: false,
      },
      992: {
        slidesPerView: 5
      },
      1200: {
        slidesPerView: 5
      },
      1400: {
        slidesPerView: 6
      },
    }
  });

  // insta-feed-slider
  var swiper = new Swiper(".insta-feed-slider", {
    freeMode: true,
    spaceBetween: 0,
    loop: true,
    autoplay: {
      delay: 1,
      disableOnInteraction: true
    },
    freeMode: true,
    speed: 5000,
    freeModeMomentum: false,
    pagination: {
      el: ".swiper-pagination",
      clickable: 'true',
    },
    breakpoints: {
      280: {
        slidesPerView: 1,
        navigation: false,
      },
      386: {
        slidesPerView: 2,
        navigation: false,
      },
      576: {
        slidesPerView: 3,
        navigation: false,
      },
      768: {
        slidesPerView: 4,
        navigation: false,
      },
      992: {
        slidesPerView: 5
      },
      1200: {
        slidesPerView: 7
      },
      1400: {
        slidesPerView: 7
      },
    }
  });


  // insta-feed-slider
  var swiper = new Swiper(".wild-package-slider", {
    slidesPerView: 1,
    speed: 800,
    loop: true,
    freeMode: true,
    spaceBetween: 0,
    grabCursor: true,
    slidesPerView: 7,
    loop: true,
    freeModeMomentum: false,
    navigation: {
      nextEl: '.wild-package-prev',
      prevEl: '.wild-package-next',
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: 'true',
    },
    breakpoints: {
      280: {
        slidesPerView: 1,
        navigation: false,
      },
      420: {
        slidesPerView: 2,
        navigation: false,
      },
      576: {
        slidesPerView: 2,
        navigation: false,
      },
      768: {
        slidesPerView: 3,
        navigation: false,
      },
      992: {
        slidesPerView: 3
      },
      1200: {
        slidesPerView: 4
      },
      1400: {
        slidesPerView: 4
      },
    }
  });

  // package slidder-2
  var swiper = new Swiper(".package-slider2", {
    slidesPerView: 1,
    speed: 800,
    loop: true,
    freeMode: true,
    spaceBetween: 25,
    grabCursor: true,
    slidesPerView: 7,
    loop: true,
    freeModeMomentum: false,
    navigation: {
      nextEl: '.package2-prev',
      prevEl: '.package2-next',
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: 'true',
    },
    breakpoints: {
      280: {
        slidesPerView: 1,
        navigation: false,
      },
      420: {
        slidesPerView: 1,
        navigation: false,
      },
      576: {
        slidesPerView: 2,
        navigation: false,
      },
      768: {
        slidesPerView: 2,
        navigation: false,
      },
      992: {
        slidesPerView: 3
      },
      1200: {
        slidesPerView: 3
      },
      1400: {
        slidesPerView: 3
      },
      1500: {
        slidesPerView: 4
      },
    }
  });

  // testimoanil slider
  new Swiper(".testimonial1-slider", {
    slidesPerView: 1,
    speed: 1000,
    autoplay: true,
    spaceBetween: 25,
    loop: true,
    roundLengths: true,
    pagination: {
      el: ".testimonial1-pagination",
      clickable: 'true',
    }
  });

  new Swiper(".testimonial2-slider", {
    slidesPerView: 1,
    speed: 1000,
    autoplay: true,
    spaceBetween: 45,
    loop: true,
    roundLengths: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: 'true',
    },
    navigation: {
      nextEl: ".testi2-next",
      prevEl: ".testi2-prev",
    },
    breakpoints: {
      280: {
        slidesPerView: 1,
        navigation: false,
      },
      386: {
        slidesPerView: 1,
        navigation: false,
      },
      576: {
        slidesPerView: 1,
        navigation: false,
      },
      768: {
        slidesPerView: 1,
        navigation: false,
      },
      992: {
        slidesPerView: 2
      },
    }
  });

  new Swiper(".testimonial4-slider", {
    slidesPerView: 1,
    speed: 1000,
    autoplay: true,
    spaceBetween: 25,
    loop: true,
    roundLengths: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: 'true',
    },
    navigation: {
      nextEl: ".testi4-next",
      prevEl: ".testi4-prev",
    },
    breakpoints: {
      280: {
        slidesPerView: 1,
        navigation: false,
      },
      386: {
        slidesPerView: 1,
        navigation: false,
      },
      576: {
        slidesPerView: 1,
        navigation: false,
      },
      768: {
        slidesPerView: 1,
        navigation: false,
      },
      992: {
        slidesPerView: 2
      },
    }
  });

  new Swiper(".testimonial5-slider", {
    slidesPerView: 1,
    speed: 1000,
    autoplay: true,
    spaceBetween: 25,
    loop: true,
    roundLengths: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: 'true',
    },
    navigation: {
      nextEl: ".testi2-next",
      prevEl: ".testi2-prev",
    },
    breakpoints: {
      280: {
        slidesPerView: 1,
        navigation: false,
      },
      386: {
        slidesPerView: 1,
        navigation: false,
      },
      576: {
        slidesPerView: 1,
        navigation: false,
      },
      768: {
        slidesPerView: 1,
        navigation: false,
      },
      992: {
        slidesPerView: 2
      },
    }
  });

  // trip-category-slider
  var swiper = new Swiper(".trip-category-slider", {
    slidesPerView: 1,
    speed: 1200,
    spaceBetween: 25,
    loop: true,
    roundLengths: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: 'true',
    },
    navigation: false,
    breakpoints: {
      280: {
        slidesPerView: 1,
        navigation: false,
      },
      576: {
        slidesPerView: 1,
        navigation: false,
      },
      768: {
        slidesPerView: 2,
        navigation: false,
      },
      992: {
        slidesPerView: 3
      },
      1200: {
        slidesPerView: 3
      },
    }
  });

  // tour-package-selider
  var swiper = new Swiper(".tour-package-selider", {
    slidesPerView: 1,
    speed: 1200,
    spaceBetween: 20,
    autoplay: true,
    loop: true,
    roundLengths: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: 'true',
    },
    navigation: {
      nextEl: ".package1-next",
      prevEl: ".package1-prev",
    },
    breakpoints: {
      280: {
        slidesPerView: 1,
        navigation: false,
      },
      386: {
        slidesPerView: 1,
        navigation: false,
      },
      576: {
        slidesPerView: 2,
        navigation: false,
      },
      768: {
        slidesPerView: 2,
        navigation: false,
      },
      992: {
        slidesPerView: 3
      },
      1200: {
        slidesPerView: 3
      },
      1400: {
        slidesPerView: 4
      },
    }
  });

  // Destination5-slider
  var swiper = new Swiper(".destination5-slider", {
    slidesPerView: 1,
    speed: 800,
    spaceBetween: 25,
    autoplay: true,
    loop: true,
    roundLengths: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: 'true',
    },
    navigation: {
      nextEl: ".destination5-next",
      prevEl: ".destination5-prev",
    },
    breakpoints: {
      280: {
        slidesPerView: 1,
        navigation: false,
      },
      420: {
        slidesPerView: 2,
        navigation: false,
      },
      576: {
        slidesPerView: 2,
        navigation: false,
      },
      768: {
        slidesPerView: 3,
        navigation: false,
      },
      992: {
        slidesPerView: 4
      },
      1200: {
        slidesPerView: 4
      },
      1400: {
        slidesPerView: 5
      },
    }
  });

  var swiper = new Swiper(".blog-slider", {
    slidesPerView: 1,
    speed: 1200,
    spaceBetween: 15,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    autoplay: true,
    loop: true,
    roundLengths: true,
    navigation: {
      nextEl: '.blog1-prev',
      prevEl: '.blog1-next',
    },
  });

  //hero slider
  var swiper = new Swiper(".hero-slider", {
    loop: true,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    speed: 2000,
    autoplay: {
      delay: 2000,
    },
    pagination: {
      el: ".hero-pagination",
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + 0 + (index + 1) + "</span>";
      },
    },
  });


  // Odometer Counter

  $(".counter-single").each(function () {
    $(this).isInViewport(function (status) {
      if (status === "entered") {
        for (var i = 0; i < document.querySelectorAll(".odometer").length; i++) {
          var el = document.querySelectorAll('.odometer')[i];
          el.innerHTML = el.getAttribute("data-odometer-final");
        }
      }
    });
  });


  // Magnific Popup video
  $('.popup-youtube').magnificPopup({
    type: 'iframe'
  });

  // star-rating
  $('.star-icon').each(function () {
    $(this).on('hover', function () {
      $(this).prevAll().addBack().css("color", "#90B956");
    }, function () {
      if (!$(this).parent().attr("data-rating")) {
        $(this).prevAll().addBack().css("color", "lightgrey");
      } else {
        $(this).siblings().addBack().each(function (index) {
          index + 1 <= $(this).parent().attr("data-rating") ?
            $(this).css("color", "#90B956") : $(this).css("color", "lightgrey");
        });
      }
    }).on('click', function () {
      $(this).parent().attr("data-rating", $(this).prevAll().length + 1);
    });
  });

  // range slider
  $('#price-range-submit').hide();

  $("#min_price,#max_price").on('change', function () {

    $('#price-range-submit').show();

    var min_price_range = $("#min_price").val();

    var max_price_range = $("#max_price").val();

    if (min_price_range > max_price_range) {
      $('#max_price').val(min_price_range);
    }

    $("#slider-range").slider({
      values: [min_price_range, max_price_range]
    });

  });

  var tourFilterData = {
    'tourDestinationDropdown': '',
    'tourSearchKeyword': '',
    'page_number': '',
    'tourTypeTermId': [],
    'tourPriceRangeMin': '',
    'tourPriceRangeMax': '',
  }

  $("#min_price,#max_price").on("paste keyup", function () {

    var min_price_range = parseFloat($("#min_price").val(), 100);

    var max_price_range = parseFloat($("#max_price").val(), 10000);

    if (min_price_range == max_price_range) {

      max_price_range = min_price_range + 100;
      $("#min_price").val(min_price_range);
      $("#max_price").val(max_price_range);
    }

    $("#slider-range").slider({
      values: [min_price_range, max_price_range]
    });

  });

  var min_price_range = parseFloat($("#min_price").attr('min'));
  var max_price_range = parseFloat($("#min_price").attr('max'));



  $(function () {
    $("#slider-range").slider({
      range: true,
      orientation: "horizontal",
      min: min_price_range,
      max: max_price_range,
      values: [min_price_range, max_price_range],
      step: 10,

      slide: function (event, ui) {
        if (ui.values[0] == ui.values[1]) {
          return false;
        }

        $("#min_price").val(ui.values[0]);
        $("#max_price").val(ui.values[1]);
        tourFilterData.tourPriceRangeMin = $('#min_price').val();
        tourFilterData.tourPriceRangeMax = $('#max_price').val();
      },
      stop: function () {
        tourFilterData.page_number = 1;
        filterTourAjaxHandler();
      }
    });
    $("#min_price").val($("#slider-range").slider("values", 0));
    $("#max_price").val($("#slider-range").slider("values", 1));


  });

  $("#slider-range,#price-range-submit").on('click', function () {

    var min_price = $('#min_price').val();
    var max_price = $('#max_price').val();

    $("#searchResults").text("Here List of products will be shown which are cost between " + min_price + " " + "and" + " " + max_price + ".");
  });

  // range-slider-mobile

  $(function () {
    $("#slider-range-mobile").slider({
      range: true,
      orientation: "horizontal",
      min: 0,
      max: 10000,
      values: [0, 10000],
      step: 100,

      slide: function (event, ui) {
        if (ui.values[0] == ui.values[1]) {
          return false;
        }

        $("#min_price-mobile").val(ui.values[0]);
        $("#max_price-mobile").val(ui.values[1]);
      }
    });

    $("#min_price-mobile").val($("#slider-range-mobile").slider("values", 0));
    $("#max_price-mobile").val($("#slider-range-mobile").slider("values", 1));

  });

  $("#slider-range-mobile,#price-range-submit").on('click', function () {

    var min_price = $('#min_price-mobile').val();
    var max_price = $('#max_price-mobile').val();

    $("#searchResults").text("Here List of products will be shown which are cost between " + min_price + " " + "and" + " " + max_price + ".");
  });

  // package sidebar filter

  $('.filter-button').on("click", function () {
    $('.tour-package-sidebar').toggleClass('show');
  });

  $('.package-sidebar-close').on("click", function () {
    $('.tour-package-sidebar').removeClass('show');
  });

  // password-hide and show

  const togglePassword = document.querySelector('#togglePassword');

  const password = document.querySelector('#password');

  if (togglePassword) {
    togglePassword.addEventListener('click', function (e) {
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      // toggle the eye / eye slash icon
      this.classList.toggle('bi-eye');
    });
  }

  // confirm-password
  const togglePassword2 = document.getElementById('togglePassword2');

  const password2 = document.querySelector('#password2');

  if (togglePassword2) {
    togglePassword2.addEventListener('click', function (e) {
      const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
      password2.setAttribute('type', type);
      // toggle the eye / eye slash icon
      this.classList.toggle('bi-eye');
    });
  }

  /* 
   * WooCommerce ajax update price cart
   */

  let timeout;
  $('.woocommerce').on('change', 'input.qty', function () {
    if (timeout !== undefined) {
      clearTimeout(timeout);
    }
    timeout = setTimeout(function () {
      $("[name='update_cart']").trigger("click"); // trigger cart update
    }, 1000); // 1 second delay, half a second (500) seems comfortable too
  });

  // Update Adults Quantity
  var product_id = $('#productId').val();
  var productInfo = {
    adultsPerson: 1,
    childrenPerson: 0,
    servicesList: [],
  }
  $('.booking-form-item-type .adults .plus-qty').click(function () {
    // Get adults person number
    var adultsPerson = $('#adultsPerson').val();
    var updateAdultPerson = parseInt(adultsPerson) + 1;
    $('#adultsPerson').val(updateAdultPerson);
    productInfo.adultsPerson = updateAdultPerson;
    updateProductPrice();
  });

  $('.booking-form-item-type .adults .minus-qty').click(function () {

    // Get adults person number
    var adultsPerson = $('#adultsPerson').val();
    var updateAdultPerson = parseInt(adultsPerson) - 1;
    if (!(updateAdultPerson < 1)) {
      $('#adultsPerson').val(updateAdultPerson);
      productInfo.adultsPerson = updateAdultPerson;
      updateProductPrice();
    }
  });

  // Update Children Quantity 
  $('.booking-form-item-type .children .plus-qty').click(function () {

    // Get adults person number
    var childrenPerson = $('#childrenPerson').val();
    var updateChildrenPrice = parseInt(childrenPerson) + 1;
    $('#childrenPerson').val(updateChildrenPrice);
    productInfo.childrenPerson = updateChildrenPrice;
    updateProductPrice();
  });

  // Update Children Quantity 
  $('.booking-form-item-type .children .minus-qty').click(function () {

    // Get adults person number
    var childrenPerson = $('#childrenPerson').val();
    var updateChildrenPrice = parseInt(childrenPerson) - 1;
    if (!(updateChildrenPrice < 0)) {
      $('#childrenPerson').val(updateChildrenPrice);
      productInfo.childrenPerson = updateChildrenPrice;
      updateProductPrice();
    }

  });

  // AJAX Call for product update 
  function updateProductPrice() {
    var data = {
      'action': 'egns_get_product_data_by_id',
      'post_type': 'product',
      'product_id': product_id,
      'product_info': productInfo,
    };
    $.ajax({ // you can also use $.post here
      url: egens_frontend_ajax_handler_params.ajaxurl, // AJAX handler
      data: data,
      type: 'POST',
      beforeSend: function () {
        jQuery('.astrip-spinner').addClass('active');
        jQuery('.booking-form-box').css('opacity', '0.5');
      },
      success: function (data) {
        data = JSON.parse(data);
        $('.main-price').empty().html(data.total_price);
        jQuery('.astrip-spinner').removeClass('active');
        jQuery('.booking-form-box').css('opacity', '1');
      }
    });
  }
  $(window).bind('beforeunload', function () {
    $('#adultsPerson').val(1);
    $('#childrenPerson').val(0);
    $('.services_check').each(function () {
      $(this).removeAttr('checked');
    });
  })

  $('.services_check').click(function () {
    if ($(this).is(":checked")) {
      productInfo.servicesList.push($(this).val());
      updateProductPrice();
    } else {
      var servicesList = productInfo.servicesList.filter(item => item !== $(this).val());
      productInfo.servicesList = servicesList;
      updateProductPrice();
    };
  });

  // Service checkbox update
  $('.radio-item #datepicker').click(function () {
    $("input[type=radio]").prop("checked", true);
  });

  // blog slider slider
  var swiper = new Swiper(".blog-archive-slider", {
    loop: true,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    speed: 1500,
    autoplay: {
      delay: 1500,
    },
    navigation: {
      nextEl: ".blog1-next",
      prevEl: ".blog1-prev",
    },
  });


  // Breadcrumb slider
  var swiper = new Swiper(".breadcrumb-slider", {
    loop: true,
    slidesPerView: 1,
    speed: 5000,
    autoplay: {
      delay: 5000,
    },

  });

  $('#tourSearch').submit(function (e) {
    e.preventDefault();
    var tourSearchKeyword = $('#tourSearchKeyword').val();
    tourFilterData.tourSearchKeyword = tourSearchKeyword;
    tourFilterData.page_number = 1;
    filterTourAjaxHandler();
  });

  $('#tourDestinationDropdown').change(function () {
    var tourDestinationDropdown = $(this).val();
    tourFilterData.tourDestinationDropdown = tourDestinationDropdown;
    tourFilterData.page_number = 1;
    filterTourAjaxHandler();
  });

  // Ajax Pagination 
  jQuery('body').on('click', '#tourPackagePagination ul li a', function (e) {
    e.preventDefault();
    var page_number = jQuery(this).attr('href').replace('#', '');
    page_number = parseInt(page_number);
    tourFilterData.page_number = page_number;
    filterTourAjaxHandler();
  });

  // Tour Type Checkbox
  jQuery('body').on('click', '.tourType', function () {
    var tourType = $(this).val(); // get selected value 

    if (!tourFilterData.tourTypeTermId.includes(tourType)) {
      tourFilterData.tourTypeTermId.push(tourType);
      filterTourAjaxHandler();
    } else {
      var tourType = tourFilterData.tourTypeTermId.filter(item => item !== jQuery(this).val());
      tourFilterData.tourTypeTermId = tourType;
      filterTourAjaxHandler();
    }
  });

  // Tour Duration Checkbox
  jQuery('body').on('click', '.tourDuration', function () {
    var tourDuration = $(this).val(); // get selected value 
    if (!tourFilterData.tourDurationValue.includes(tourDuration)) {
      tourFilterData.tourDurationValue.push(tourDuration);
      console.log(tourFilterData);
      filterTourAjaxHandler();
    } else {
      var tourDuration = tourFilterData.tourDurationValue.filter(item => item !== jQuery(this).val());
      tourFilterData.tourDurationValue = tourDuration;
      console.log(tourDuration);
      filterTourAjaxHandler();
    }
  });

  // Call Tour Ajax Filter
  function filterTourAjaxHandler() {
    // Set data value 
    var data = {
      'action': 'tour_search_filter',
      'tourFilterData': tourFilterData,
    };

    $.ajax({ // you can also use $.post here
      url: egens_frontend_ajax_handler_params.ajaxurl, // AJAX handler
      data: data,
      type: 'POST',
      beforeSend: function () {
        jQuery('#tourFilterData').parent('div').addClass('loading');
      },
      success: function (data) {
        $('#tourFilterData').empty().html(data);
        jQuery('#tourFilterData').parent('div').removeClass('loading');
      }
    });
  }

  // Rating form Validation

  jQuery('#review_rating').submit(function (event) {

    var serializedData = jQuery(this).serialize();
    var serializedArray = serializedData.split('&');
    var data = {};
    var customer_name = jQuery('input[name="customer_name"]').val();
    var customer_email = jQuery('input[name="customer_email"]').val();
    var review_title = jQuery('input[name="review_title"]').val();
    var review_message = jQuery('input[name="review_message"]').val();
    var criteria_array = egens_frontend_ajax_handler_params.get_all_criteria;
    var flag = true;
    if (customer_name == '' || customer_email == '' || review_title == '' || review_message == '') {
      flag = true;
    }

    serializedArray.forEach(function (pair) {
      var parts = pair.split('=');
      data[decodeURIComponent(parts[0])] = decodeURIComponent(parts[1]);
    });
    criteria_array.forEach(element => {
      var prepareSlug = (element.criteria_item.replace(/[^A-Za-z0-9-]+/g, '_').trim().toLowerCase()) + 'rating';
      if (data.hasOwnProperty(prepareSlug)) {
        flag = false;
      } else {
        flag = true;
      }
    });
    if (flag == true) {
      jQuery('.rating_all_fields_error').removeClass('d-none');
      event.preventDefault();
    } else {
      jQuery('.rating_all_fields_error').addClass('d-none');
      var submitButton = document.querySelector('#review_rating input[type="submit"]');
      submitButton.disabled = true;
    }
  });

  // Enquiry  Form Handler 

  jQuery('#enquiryForm').submit(function (event) {
    event.preventDefault();

    let enquiries_fullname = jQuery('input[name="enquiries_fullname"]').val();
    let enquiries_email_address = jQuery('input[name="enquiries_email_address"]').val();
    let enquiries_message = jQuery('textarea[name="enquiries_message"]').val();

    if (enquiries_fullname && enquiries_email_address && enquiries_message) {
      // Remove Validation Error
      jQuery('.enquiries_fullname_error').addClass('d-none');
      jQuery('.enquiries_email_address_error').addClass('d-none');
      jQuery('.enquiries_message_error').addClass('d-none');

      // Get all value inside one variable
      var getEnquiryFormData = {
        'enquiries_fullname': enquiries_fullname,
        'enquiries_email_address': enquiries_email_address,
        'enquiries_phone': jQuery('input[name="enquiries_phone"]').val(),
        'enquiries_people': jQuery('input[name="enquiries_people"]').val(),
        'enquiries_number_of_tickets': jQuery('input[name="enquiries_number_of_tickets"]').val(),
        'enquiries_message': enquiries_message,
        'enquiries_package_id': jQuery('input[name="enquiries_package_id"]').val(),
      };
      var data = {
        'action': 'enquiry_form_handler',
        'getEnquiryFormData': getEnquiryFormData,
      };

      // Send AJAX Request to Server
      $.ajax({ // you can also use $.post here
        url: egens_frontend_ajax_handler_params.ajaxurl, // AJAX handler
        data: data,
        type: 'POST',
        success: function (data) {
          $('#enquiryForm')[0].reset();
          $('.enquiries_success_message').empty().html('<p>Thank you for getting in touch! We appreciate you contacting us</p>');
        }
      });
    } else {
      if (!enquiries_fullname) {
        jQuery('.enquiries_fullname_error').removeClass('d-none');
      } else {
        jQuery('.enquiries_fullname_error').addClass('d-none');
      }
      if (!enquiries_email_address) {
        jQuery('.enquiries_email_address_error').removeClass('d-none');
      } else {
        jQuery('.enquiries_email_address_error').addClass('d-none');
      }
      if (!enquiries_message) {
        jQuery('.enquiries_message_error').removeClass('d-none');
      } else {
        jQuery('.enquiries_message_error').addClass('d-none');
      }
    }


    //Inpuit file type 
    let input = document.getElementById("image");
    let imageName = document.getElementById("imageName");
    input.addEventListener("change", () => {
      let inputImage = document.querySelector("input[type=file]").files[0];
      imageName.innerText = inputImage.name;
    })

    $('#file-upload').change(function () {
      var i = $(this).prev('label').clone();
      var file = $('#file-upload')[0].files[0].name;
      $(this).prev('label').text(file);
    });






  });
}(jQuery));