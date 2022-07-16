(function ($) {
    "use strict";

    /*****************************
    * Commons Variables
    *****************************/
    var $window = $(window),
        $body = $('body');

    /**********************
    * Sticky Menu
    ***********************/
    $(window).on('scroll', function (event) {
        var scroll = $(window).scrollTop();
        if (scroll < 150) {
            $(".sticky-header").removeClass("is-sticky");
        } else {
            $(".sticky-header").addClass("is-sticky");
        }
    });


    /*****************************
    * Off Canvas Function
    *****************************/
    (function () {
        var $offCanvasToggle = $('.offcanvas-toggle'),
            $offCanvas = $('.offcanvas'),
            $offCanvasOverlay = $('.offcanvas-overlay'),
            $mobileMenuToggle = $('.mobile-menu-toggle');
        $offCanvasToggle.on('click', function (e) {
            $("div[id^='gb-widget']").css("z-index", "999");
            e.preventDefault();
            var $this = $(this),
                $target = $this.attr('href');
            $body.addClass('offcanvas-open');
            $($target).addClass('offcanvas-open');
            $offCanvasOverlay.fadeIn();
            if ($this.parent().hasClass('mobile-menu-toggle')) {
                $this.addClass('close');
            }
        });
        $('.offcanvas-close, .offcanvas-overlay').on('click', function (e) {
            e.preventDefault();
            $body.removeClass('offcanvas-open');
            $offCanvas.removeClass('offcanvas-open');
            $offCanvasOverlay.fadeOut();
            $mobileMenuToggle.find('a').removeClass('close');
        });
    })();


    /**************************
     * Offcanvas: Menu Content
     **************************/
    function mobileOffCanvasMenu() {
        var $offCanvasNav = $('.offcanvas-menu'),
            $offCanvasNavSubMenu = $offCanvasNav.find('.sub-menu');

        /*Add Toggle Button With Off Canvas Sub Menu*/
        $offCanvasNavSubMenu.parent().prepend('<div class="offcanvas__menu-expand"></div>');

        /*Category Sub Menu Toggle*/
        $offCanvasNav.on('click', 'li a, .offcanvas__menu-expand', function (e) {
            var $this = $(this);
            if ($this.attr('href') === '#' || $this.hasClass('offcanvas__menu-expand')) {
                e.preventDefault();
                if ($this.siblings('ul:visible').length) {
                    $this.parent('li').removeClass('active');
                    $this.siblings('ul').slideUp();
                    $this.parent('li').find('li').removeClass('active');
                    $this.parent('li').find('ul:visible').slideUp();
                } else {
                    $this.parent('li').addClass('active');
                    $this.closest('li').siblings('li').removeClass('active').find('li').removeClass('active');
                    $this.closest('li').siblings('li').find('ul:visible').slideUp();
                    $this.siblings('ul').slideDown();
                }
            }
        });
    }
    mobileOffCanvasMenu();

    /******************************
         * Hero Slider - [Single Grid]
         *****************************/
    $('.hero').slick({
        arrows: true,
        dots: false,
        easing: 'linear',
        autoplaySpeed: 3500,
        autoplay: true,
        speed: 1000,
        prevArrow: '<button type="button" class="hero-slider__arrow hero-slider__arrow--left"><i class="far fa-chevron-left"></i></button>',
        nextArrow: '<button type="button" class="hero-slider__arrow hero-slider__arrow--right"><i class="far fa-chevron-right"></i></button>',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false
                }
            },
        ]
    });

    $('.slider-nav').slick({
        slidesToShow: 5,
        slidesToScroll: 3,
        arrows: false,
        focusOnSelect: true,
        autoplaySpeed: 2000,
        autoplay: true,
        responsive: [
            {
                breakpoint: 480,
                settings: {
                    centerPadding: '40px',
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            }
        ]
    });

    $('.article-slider').slick({
        focusOnSelect: true,
        lazyLoad: 'ondemand',
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        easing: 'linear',
        speed: 500,
        prevArrow: '<button type="button" class="default-slider__arrow default-slider__arrow--left prevArrow"><i class="far fa-chevron-left"></button>',
        nextArrow: '<button type="button"  class="default-slider__arrow default-slider__arrow--right nextArrow"><i class="far fa-chevron-right"></button>',
        centerMode: true,
        variableWidth: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    autoplay: true,
                    variableWidth: true,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    autoplay: true,
                    variableWidth: true,
                }
            }
        ]
    });

    $('.default-slider-3grid-2rows').slick({
        dots: false,
        centerMode: true,
        arrows: false,
        lazyLoad: 'ondemand',
        infinite: false,
        rows: 2,
        slidesPerRow: 3,
        easing: 'ease-out',
        speed: 1000,
        vertical: true,
        verticalSwiping: true,
        responsive: [

            {
                breakpoint: 992,
                settings: {
                    slidesPerRow: 2,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesPerRow: 1,
                    speed: 500,
                }
            },
        ]
    });

    //ใช้สำหรับเป็นเลขข้างใต้สไลด์
    $('.slider-dots-3grid-2rows').slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.default-slider-3grid-2rows',
        arrows: false,
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        centerPadding: '20%',
    });

    $('.default-slider-4grid-2rows').slick({
        dots: false,
        arrows: false,
        lazyLoad: 'ondemand',
        infinite: false,
        rows: 2,
        slidesPerRow: 4,
        easing: 'ease-out',
        speed: 1000,
        vertical: true,
        verticalSwiping: true,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesPerRow: 2,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesPerRow: 1,
                    speed: 500,
                }
            },
        ]
    });

    //ใช้สำหรับเป็นเลขข้างใต้สไลด์
    $('.slider-dots-4grid-2rows').slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.default-slider-4grid-2rows',
        arrows: false,
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        centerPadding: '20%',
    });

    $('.default-slider-3grid-1rows').slick({
        lazyLoad: 'ondemand',
        infinite: false,
        slidesPerRow: 3,
        autoplaySpeed: 2000,
        autoplay: true,
        easing: 'ease-out',
        prevArrow: '<button type="button" class="default-slider__arrow default-slider__arrow--left prevArrow"><i class="far fa-chevron-left"></button>',
        nextArrow: '<button type="button"  class="default-slider__arrow default-slider__arrow--right nextArrow"><i class="far fa-chevron-right"></button>',
        speed: 1000,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesPerRow: 2,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesPerRow: 1,
                    speed: 500,
                }
            },
        ]
    });

    $('.default-slider-4grid-1rows').slick({
        lazyLoad: 'ondemand',
        infinite: false,
        slidesPerRow: 4,
        autoplaySpeed: 2000,
        autoplay: true,
        easing: 'ease-out',
        prevArrow: '<button type="button" class="default-slider__arrow default-slider__arrow--left prevArrow"><i class="far fa-chevron-left"></button>',
        nextArrow: '<button type="button"  class="default-slider__arrow default-slider__arrow--right nextArrow"><i class="far fa-chevron-right"></button>',
        speed: 1000,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesPerRow: 2,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesPerRow: 1,
                    speed: 500,
                }
            },
        ]
    });

    //Implementing navigation of slides using mouse scroll เลื่อนลูกกลิ้งเพื่อเลื่อน slick-list
    // $('.slick-list').parent().on('wheel', (function (e) {
    //     e.preventDefault();
    //     if (e.originalEvent.deltaY < 0) {
    //         $(this).slick('slickNext');
    //     } else {
    //         $(this).slick('slickPrev');
    //     }
    // }));

    // เปิด GetButton.io widget
    // (function () {
    //     var options = {
    //         facebook: "1759068651005736", // Facebook page ID
    //         call_to_action: "ติดต่อเรา", // Call to action
    //         position: "right", // Position may be 'right' or 'left'
    //     };
    //     var proto = document.location.protocol,
    //         host = "getbutton.io",
    //         url = proto + "//static." + host;
    //     var s = document.createElement('script');
    //     s.type = 'text/javascript';
    //     s.async = true;
    //     s.src = url + '/widget-send-button/js/init.js';
    //     s.onload = function () {
    //         WhWidgetSendButton.init(host, proto, options);
    //     };
    //     var x = document.getElementsByTagName('script')[0];
    //     x.parentNode.insertBefore(s, x);
    // })();
    // ปิด GetButton.io widget

    /*----------------------------------
        Scroll To Top Active
    -----------------------------------*/
    $('body').materialScrollTop();

    /*----------------------------------
        Venobox Active
    -----------------------------------*/
    $('.venobox').venobox({
        framewidth: '55%',
        frameheight: '100%'
    });
    $('.venobox_gallery').venobox({
        framewidth: '60vw',                            // default: ''
        frameheight: '100%',
        titleattr: 'data-title',                       // default: 'title'
        numeratio: true,                               // default: false
        infinigall: true,                               // default: false
        share: ['facebook', 'download'] // default: []
    });

    // Initialize Share-Buttons
    // $.contactButtons({
    //     effect  : 'slide-on-scroll',
    //     buttons : {
    //     'messenger':   { class: 'messenger', use: true, icon: 'fab fa-facebook-messenger', link: 'http://m.me/IamSafetyInThai',title: 'ส่งข้อความผ่าน messenger' },
    //     'line':   { class: 'line',      use: true, icon: 'fab fa-line', link: 'https://line.me/R/ti/p/%40mgw1303w',title: 'ส่งข้อความผ่าน line' },
    //     'youtube':     { class: 'youtube',    use: true, icon: 'fab fa-youtube', link: 'https://www.youtube.com/TopproChannel',title: 'ติดตามเรา' },
    //     'phone':      { class: 'phone separated',    use: true, icon: 'fas fa-phone-square', link: '033-135-009', title: 'โทรเลย' },
    //     'email':      { class: 'email',    use: true, icon: 'fas fa-envelope', link: 'topprotpd@yahoo.com',title: 'ส่งอีเมลหาเรา' }
    //     }
    // });

    // Initialize Animate on scroll
    AOS.init();
    
})(jQuery);

function disable_copytext(){
    /*Disable f12 build*/
    window.onkeydown = window.onkeyup = window.onkeypress = function(event) {
        //Determine whether to press F12, F12 key code is 123
        if (event.keyCode === 123) {
            event.preventDefault(); // Block default event behavior
            window.event.returnValue = false;
        }
    }

    // Add a custom event for the right button, you can disable
    window.oncontextmenu = function() {
        event.preventDefault(); // Block default event behavior
        return false;
    }
}

//สำหรับแทนที่วิดีโอด้วยภาพ พอกดภาพแล้วค่อยโหลดวิดีโอ
var video_wrapper = $('.youtube-video-place');
if (video_wrapper.length) {
    $('.play-youtube-video').on('click', function() {
        video = $(this).parent('.youtube-video-place');
        video.html(
            '<div class="embed-responsive embed-responsive-16by9"><iframe class="responsive-iframe" allow="autoplay" src="' +
            video.data('yt-url') +
            '"></iframe></div>');
    });
}

//สำหรับการทำ Lazy รูปภาพ เมื่อเห็นรูปถึงจะโหลดมาแสดง
document.addEventListener("DOMContentLoaded", function() {
    var lazyloadImages;    
  
    if ("IntersectionObserver" in window) {
      lazyloadImages = document.querySelectorAll(".lazy");
      var imageObserver = new IntersectionObserver(function(entries, observer) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            var image = entry.target;
            image.src = image.dataset.src;
            image.classList.remove("lazy");
            imageObserver.unobserve(image);
          }
        });
      });
  
      lazyloadImages.forEach(function(image) {
        imageObserver.observe(image);
      });
    } else {  
      var lazyloadThrottleTimeout;
      lazyloadImages = document.querySelectorAll(".lazy");
      
      function lazyload () {
        if(lazyloadThrottleTimeout) {
          clearTimeout(lazyloadThrottleTimeout);
        }    
  
        lazyloadThrottleTimeout = setTimeout(function() {
          var scrollTop = window.pageYOffset;
          lazyloadImages.forEach(function(img) {
              if(img.offsetTop < (window.innerHeight + scrollTop)) {
                img.src = img.dataset.src;
                img.classList.remove('lazy');
              }
          });
          if(lazyloadImages.length == 0) { 
            document.removeEventListener("scroll", lazyload);
            window.removeEventListener("resize", lazyload);
            window.removeEventListener("orientationChange", lazyload);
          }
        }, 20);
      }
  
      document.addEventListener("scroll", lazyload);
      window.addEventListener("resize", lazyload);
      window.addEventListener("orientationChange", lazyload);
    }
})

//ส่วนของการแสดงหน้ายอมรับคุกกี้
function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function eraseCookie(name) {
    document.cookie = name + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

function cookieConsent() {
    if (!getCookie('allowCookies')) {
        $('.toast').toast('show');
    }else{
        $('.cookie_content').hide();
    }
}

$('#btnAccept').click(() => {
    setCookie('allowCookies', '1', 1);//สร้างคุกกี้
    $('.toast').toast('hide');
})

// load
cookieConsent()

$('.nav-tabs a[href="' + window.location.hash + '"]').click(); //เมื่อเข้ามาในหน้าจะ active หลักสูตรที่อยู่ในลิงค์
