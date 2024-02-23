/***************************************************
==================== JS INDEX ======================
****************************************************
01. PreLoader Js


****************************************************/

(function ($) {
	"use strict";

	var windowOn = $(window);
	////////////////////////////////////////////////////
	// 01. PreLoader Js
	windowOn.on('load',function() {
		$(".tp-preloader").fadeOut(500);
	});


	// const colorInput = document.querySelector('input[type=color]');
	// const colorVariable = '--tp-theme-primary';

	// colorInput.addEventListener('change', function(e){
	// 	var clr = e.target.value;
	// 	document.documentElement.style.setProperty(colorVariable, clr);
	// })


	////////////////////////////////////////////////////
	// 02. Mobile Menu Js
	$('#mobile-menu').meanmenu({
		meanMenuContainer: '.mobile-menu',
		meanScreenWidth: "991",
		meanExpand: ['<i class="fal fa-plus"></i>'],
	});
	// 02. Mobile Menu Js
	$('#mobile-menu-large').meanmenu({
		meanMenuContainer: '.mobile-menu',
		meanScreenWidth: "5000",
		meanExpand: ['<i class="fal fa-plus"></i>'],
	});

	
	////////////////////////////////////////////////////
	// 03. Sidebar Js
	$(".offcanvas-open-btn").on("click", function () {
		$(".offcanvas__area").addClass("offcanvas-opened");
		$(".body-overlay").addClass("opened");
	});
	$(".offcanvas-close-btn").on("click", function () {
		$(".offcanvas__area").removeClass("offcanvas-opened");
		$(".body-overlay").removeClass("opened");
	});


	////////////////////////////////////////////////////
	// 04. Body overlay Js
	$(".body-overlay").on("click", function () {
		$(".offcanvas__area").removeClass("offcanvas-opened");
		$(".body-overlay").removeClass("opened");
	});


	$(".tp-header__search").on("click", function () {
		$(".tp-header__search-popup").toggleClass("opened");
		$(".tp-header__search").toggleClass("opened");
	});
	$("body > *:not(header)").on("click", function () {
		$(".tp-header__search-popup").removeClass("opened");
		$(".tp-header__search").removeClass("opened");
	});


	////////////////////////////////////////////////////
	// 06. Sticky Header Js
	windowOn.on('scroll', function () {
		var scroll = $(window).scrollTop();
		if (scroll < 200) {
			$("#header-sticky").removeClass("header-sticky");
		} else {
			$("#header-sticky").addClass("header-sticky");
		}
	});

	// last child menu
	$('.wp-menu nav > ul > li').slice(-4).addClass('menu-last');


	////////////////////////////////////////////////////
	// 07. Data CSS Js
	$("[data-background").each(function () {
		$(this).css("background-image", "url( " + $(this).attr("data-background") + "  )");
	});
	
	$("[data-width]").each(function () {
		$(this).css("width", $(this).attr("data-width"));
	});

	$("[data-bg-color]").each(function () {
        $(this).css("background-color", $(this).attr("data-bg-color"));
    });

	////////////////////////////////////////////////////
	// 07. Nice Select Js
	$('select').niceSelect();

	////////////////////////////////////////////////////
	// 07. Smooth Scroll Js
	function smoothSctollTop() {
		$('.smooth a').on('click', function (event) {
			var target = $(this.getAttribute('href'));
			if (target.length) {
				event.preventDefault();
				$('html, body').stop().animate({
					scrollTop: target.offset().top - 120
				}, 1500);
			}
		});
	}
	smoothSctollTop();
	

	////////////////////////////////////////////////////
	// 08. slider__active Slider Js
	if (jQuery(".tp-header-sldier-1-active").length > 0) {
		let sliderActive1 = ".tp-header-sldier-1-active";
		let sliderInit1 = new Swiper(sliderActive1, {
			slidesPerView: 1,
			slidesPerColumn: 1,
			paginationClickable: true,
			loop: true,
			effect: 'fade',

			autoplay: {
				delay: 5000000,
			},

			// If we need pagination
			pagination: {
				el: ".main-slider-dot",
				dynamicBullets: false,
				clickable: true,
			},

			// Navigation arrows
			navigation: {
				nextEl: ".slider-button-next",
				prevEl: ".slider-button-prev",
			},

			a11y: false,
		});

		function animated_swiper(selector, init) {
			let animated = function animated() {
				$(selector + " [data-animation]").each(function () {
					let anim = $(this).data("animation");
					let delay = $(this).data("delay");
					let duration = $(this).data("duration");

					$(this)
						.removeClass("anim" + anim)
						.addClass(anim + " animated")
						.css({
							webkitAnimationDelay: delay,
							animationDelay: delay,
							webkitAnimationDuration: duration,
							animationDuration: duration,
						})
						.one(
							"webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",
							function () {
								$(this).removeClass(anim + " animated");
							}
						);
				});
			};
			animated();
			// Make animated when slide change
			init.on("slideChange", function () {
				$(sliderActive1 + " [data-animation]").removeClass("animated");
			});
			init.on("slideChange", animated);
		}

		animated_swiper(sliderActive1, sliderInit1);
	}


	var slider = new Swiper('.active-class', {
		slidesPerView: 1,
		spaceBetween: 30,
		loop: true,
		pagination: {
			el: ".testimonial-pagination-6",
			clickable: true,
			renderBullet: function (index, className) {
			  return '<span class="' + className + '">' + '<button>'+(index + 1)+'</button>' + "</span>";
			},
		},
		breakpoints: {
			'1200': {
				slidesPerView: 3,
			},
			'992': {
				slidesPerView: 2,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});
	var slider = new Swiper('.team-slider-active', {
		slidesPerView: 1,
		spaceBetween: 0,
		loop: true,
	     breakpoints: {
            640: {
              slidesPerView: 1,
              spaceBetween: 10,
            },
            768: {
              slidesPerView: 1,
              spaceBetween: 10,
            },
        
            1024: {
              slidesPerView: 4,
              spaceBetween: 10,
            },
          },
	});
	var testislider = new Swiper('.tp-testimonial-active', {
		slidesPerView: 1,
		spaceBetween: 0,
		loop: true,
		autoplay: {
			delay: 3000,
		},
		// If we need pagination
		pagination: {
			el: ".tp-testimonial-dot",
			dynamicBullets: false,
			clickable: true,
		},
	});
	var brnadslider = new Swiper('.tp-brnad__slider-active', {
		slidesPerView: 4,
		spaceBetween: 0,
		loop: true,
		autoplay: {
			delay: 3000,
		},
         breakpoints: {
             0: {
              slidesPerView: 1,
              spaceBetween: 10,
            },
            640: {
              slidesPerView: 1,
              spaceBetween: 10,
            },
            768: {
              slidesPerView: 1,
              spaceBetween: 10,
            },
        
            1024: {
              slidesPerView: 4,
              spaceBetween: 10,
            },
          },
		// If we need pagination
		pagination: {
			el: ".tp-testimonial-dot",
			dynamicBullets: false,
			clickable: true,
		},
	});
	var brnadslider2 = new Swiper('.tp-brnad__slider-active-2', {
		slidesPerView: 6,
		spaceBetween: 0,
		loop: true,
		autoplay: {
			delay: 3000,
		},
		breakpoints: {
			'1400': {
				slidesPerView: 6,
			},
			'1200': {
				slidesPerView: 5,
			},
			'992': {
				slidesPerView: 3,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});

	var postboxSlider = new Swiper('.postbox__slider', {
		slidesPerView: 1,
        spaceBetween: 0,
		loop: true,
		autoplay: {
		  delay: 3000,
		},
		// Navigation arrows
		navigation: {
			nextEl: ".postbox-slider-button-next",
			prevEl: ".postbox-slider-button-prev",
		},
		breakpoints: {  
			'1200': {
				slidesPerView: 1,
			},
			'992': {
				slidesPerView: 1,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});
	var swiper = new Swiper(".shop-swipper-slider-active", {
		loop: true,
		slidesPerView: "auto",
		// centeredSlides: true,
		spaceBetween: 30,
		slidesPerView: 4,
		// If we need pagination
		// Navigation arrows
		navigation: {
			nextEl: ".pd-sd-button-next",
			prevEl: ".pd-sd-button-prev",
		},
		breakpoints: {

			'1200': {
				slidesPerView: 4,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},


	});
	////////////////////////////////////////////////////
	// 13. Masonary Js
	 // portfolio active
	 $('.grid').imagesLoaded(function () {
		var grid = $('.grid').isotope({
		  itemSelector: '.grid-item',
		  percentPosition: true,
		//   layoutMode: 'fitRows',
		  masonry: {
			// use outer width of grid-sizer for columnWidth
			columnWidth: 1
	
		  }
		})
	
		$('.portfolio-menu').on('click', 'button', function () {
		  var filterValue = $(this).attr('data-filter');
		  grid.isotope({
			filter: filterValue
		  });
		});
	
	  });
	
	  $('.grid').imagesLoaded(function () {
		// init Isotope
		var $grid = $('.grid').isotope({
		  itemSelector: '.grid-item',
		  percentPosition: true,
		  masonry: {
			// use outer width of grid-sizer for columnWidth
			columnWidth: 1
		  }
		});
	
		// filter items on button click
		$('.button-group').on('click', 'button', function () {
		  var filterValue = $(this).attr('data-filter');
		  $grid.isotope({ filter: filterValue });
		});
	
	  });
	
	  //for portfolio menu active class
	  $('.portfolio-menu button').on('click', function (event) {
		$(this).siblings('.active').removeClass('active');
		$(this).addClass('active');
		event.preventDefault();
	  });

	 $('.grid-2').imagesLoaded(function () {
		var grid = $('.grid-2').isotope({
		  itemSelector: '.grid-item',
		  percentPosition: true,
		  layoutMode: 'fitRows',
		  masonry: {
			// use outer width of grid-sizer for columnWidth
			columnWidth: 1
	
		  }
		})
	
		$('.portfolio-menu').on('click', 'button', function () {
		  var filterValue = $(this).attr('data-filter');
		  grid.isotope({
			filter: filterValue
		  });
		});
	
	  });
	
	  $('.grid-2').imagesLoaded(function () {
		// init Isotope
		var $grid = $('.grid-2').isotope({
		  itemSelector: '.grid-item',
		  percentPosition: true,
		  masonry: {
			// use outer width of grid-sizer for columnWidth
			columnWidth: 1
		  }
		});
	
		// filter items on button click
		$('.button-group').on('click', 'button', function () {
		  var filterValue = $(this).attr('data-filter');
		  $grid.isotope({ filter: filterValue });
		});
	
	  });
	
	  //for portfolio menu active class
	  $('.portfolio-menu button').on('click', function (event) {
		$(this).siblings('.active').removeClass('active');
		$(this).addClass('active');
		event.preventDefault();
	  });

	/* magnificPopup img view */
	$('.popup-image').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true
		}
	});
	$('.portfolio-popup-4').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true
		}
	});

	/* magnificPopup video view */
	$(".popup-video").magnificPopup({
		type: "iframe",
	});

	////////////////////////////////////////////////////
	// 14. Wow Js
	new WOW().init();

	////////////////////////////////////////////////////
	// 16. Cart Quantity Js
	$('.cart-minus').on('click', function () {
		var $input = $(this).parent().find('input');
		var count = parseInt($input.val()) - 1;
		count = count < 1 ? 1 : count;
		$input.val(count);
		$input.change();
		return false;
	});

	$('.cart-plus').on('click', function () {
		var $input = $(this).parent().find('input');
		$input.val(parseInt($input.val()) + 1);
		$input.change();
		return false;
	});


	////////////////////////////////////////////////////
	// 17. Show Login Toggle Js
	$('#showlogin').on('click', function () {
		$('#checkout-login').slideToggle(900);
	});

	////////////////////////////////////////////////////
	// 18. Show Coupon Toggle Js
	$('#showcoupon').on('click', function () {
		$('#checkout_coupon').slideToggle(900);
	});

	////////////////////////////////////////////////////
	// 19. Create An Account Toggle Js
	$('#cbox').on('click', function () {
		$('#cbox_info').slideToggle(900);
	});

	////////////////////////////////////////////////////
	// 20. Shipping Box Toggle Js
	$('#ship-box').on('click', function () {
		$('#ship-box-info').slideToggle(1000);
	});

	////////////////////////////////////////////////////
	// 21. Counter Js
	$('.counter').counterUp({
		delay: 10,
		time: 1000
	});

	////////////////////////////////////////////////////
	// 22. Parallax Js
	if ($('.scene').length > 0) {
		$('.scene').parallax({
			scalarX: 10.0,
			scalarY: 15.0,
		});
	};

	////////////////////////////////////////////////////
	// 23. InHover Active Js
	$('.hover__active').on('mouseenter', function () {
		$(this).addClass('active').parent().siblings().find('.hover__active').removeClass('active');
	});

	if ($('#nft-slider').length > 0) {
		var stepsSlider = document.getElementById('nft-slider');
		var input0 = document.getElementById('input-with-keypress-0');
		var input1 = document.getElementById('input-with-keypress-1');
		var inputs = [input0, input1];
	
		noUiSlider.create(stepsSlider, {
			start: [0, 4],
			connect: true,
			range: {
				'min': [0],
				'max': 10
			}
		});
	
		stepsSlider.noUiSlider.on('update', function (values, handle) {
			inputs[handle].value = values[handle];
		});
	}

	////////////////////////////////////////////////////
	// 24. Data Countdown Js
    $('[data-countdown]').each(function() {
        var $this = $(this),
            finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function(event) {

            $this.html(event.strftime('<span class="tp-deal__counter-step"><span class="tp-deal__time">%-D</span><p>Hours</p></span><span class="tp-deal__spt">:</span><span class="tp-deal__counter-step"><span class="tp-deal__time">%-M</span><p>Mins</p></span><span class="tp-deal__spt">:</span><span class="tp-deal__counter-step"><span class="tp-deal__time">%-S</span><p>Mins</p></span>'));
        });

		
    });

	////////////////////////////////////////////////////
	// 25. back to top

	var btn = $('.tp-backtotop');
	$(window).on('scroll', function () {
		if ($(window).scrollTop() > 300) {
			btn.addClass('show');
		} else {
			btn.removeClass('show');
		}
	});
	btn.on('click', function (e) {
		e.preventDefault();
		$('html, body').animate({
			scrollTop: 0
		}, '300');
	});

})(jQuery);