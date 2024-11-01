/***************************************************
==================== JS INDEX ======================
****************************************************
01. PreLoader Js
02. Back To Top
03. Common Js
04. Mobile menu
05. Custom-accordian
06. Offcanvas Js
07. Search Js
08. Ecommerce
09. Sticky Header Js 
10. Nice Select Js
11. Jquery Appear raidal
12. Counter Js
13. Jarallax Js
14. Parallax Js
15. One Page Scroll Js
****************************************************/

(function ($) {
	"use strict";

	var windowOn = $(window);

	// 01. PreLoader Js//
	windowOn.on('load', function () {
		$("#loading").fadeOut(500);
	});

	// 02. Back To Top //
	function back_to_top() {
		var btn = $('#back_to_top');
		var btn_wrapper = $('.back-to-top-wrapper');

		windowOn.scroll(function () {
			if (windowOn.scrollTop() > 300) {
				btn_wrapper.addClass('back-to-top-btn-show');
			} else {
				btn_wrapper.removeClass('back-to-top-btn-show');
			}
		});

		btn.on('click', function (e) {
			e.preventDefault();
			$('html, body').animate({ scrollTop: 0 }, '300');
		});
	}
	back_to_top();

	if ($('.tp-header-height').length > 0) {
		var headerHeight = document.querySelector(".tp-header-height");      
		var setHeaderHeight = headerHeight.offsetHeight;	
		$(".tp-header-height").each(function () {
			$(this).css({
				'height' : $(this).height()
			});
		});
	}

	// 03. Common Js
	$("[data-background").each(function () {
		$(this).css("background-image", "url( " + $(this).attr("data-background") + "  )");
	});

	$("[data-width]").each(function () {
		$(this).css("width", $(this).attr("data-width"));
	});

	$("[data-bg-color]").each(function () {
		$(this).css("background-color", $(this).attr("data-bg-color"));
	});

	$("[data-text-color]").each(function () {
		$(this).css("color", $(this).attr("data-text-color"));
	});

	// 04. Mobile menu 
	var tpMenuWrap = $('.tp-mobile-menu-active > ul').clone();
	var tpSideMenu = $('.tp-offcanvas-menu nav');
	tpSideMenu.append(tpMenuWrap);
	if ($(tpSideMenu).find('.sub-menu, .tp-mega-menu').length != 0) {
		$(tpSideMenu).find('.sub-menu, .tp-mega-menu').parent().append('<button class="tp-menu-close"><i class="fas fa-chevron-right"></i></button>');
	}

	var sideMenuList = $('.tp-offcanvas-menu nav > ul > li button.tp-menu-close, .tp-offcanvas-menu nav > ul li.has-dropdown > a');
	$(sideMenuList).on('click', function (e) {
		console.log(e);
		e.preventDefault();
		if (!($(this).parent().hasClass('active'))) {
			$(this).parent().addClass('active');
			$(this).siblings('.sub-menu, .tp-mega-menu').slideDown();
		} else {
			$(this).siblings('.sub-menu, .tp-mega-menu').slideUp();
			$(this).parent().removeClass('active');
		}
	});

	// for header
	if ($("#tp-header-lang-toggle").length > 0) {
		window.addEventListener('click', function (e) {

			if (document.getElementById('tp-header-lang-toggle').contains(e.target)) {
				$(".tp-lang-list").toggleClass("tp-lang-list-open");
			}
			else {
				$(".tp-lang-list").removeClass("tp-lang-list-open");
			}
		});
	}
	// 05. Custom-accordian
	$('.tp-custom-accordion .accordion-items').on("click", function () {
		$(this).addClass('tp-faq-active').siblings().removeClass('tp-faq-active');
	});

	// 06. Offcanvas Js
	$(".tp-offcanvas-toogle").on('click', function () {
		$(".tp-offcanvas").addClass("tp-offcanvas-open");
		$(".tp-offcanvas-overlay").addClass("tp-offcanvas-overlay-open");
	});

	$(".tp-offcanvas-close-toggle,.tp-offcanvas-overlay").on('click', function () {
		$(".tp-offcanvas").removeClass("tp-offcanvas-open");
		$(".tp-offcanvas-overlay").removeClass("tp-offcanvas-overlay-open");
	});

	// 07. Search Js
	$(".search-open-btn").on("click", function () {
		$(".search-popup").addClass("search-opened");
	});

	$(".search-close-btn").on("click", function () {
		$(".search-popup").removeClass("search-opened");
	});

	// 08. Ecommerce
	function tp_ecommerce() {
		$('.tp-cart-minus').on('click', function () {
			var $input = $(this).parent().find('input');
			var count = parseInt($input.val()) - 1;
			count = count < 1 ? 1 : count;
			$input.val(count);
			$input.change();
			return false;
		});

		$('.tp-cart-plus').on('click', function () {
			var $input = $(this).parent().find('input');
			$input.val(parseInt($input.val()) + 1);
			$input.change();
			return false;
		});

		$('.tp-checkout-payment-item label').on('click', function () {
			$(this).siblings('.tp-checkout-payment-desc').slideToggle(400);

		});

		// 17. Show Login Toggle Js
		$('.tp-checkout-login-form-reveal-btn').on('click', function () {
			$('#tpReturnCustomerLoginForm').slideToggle(400);
		});

		// 18. Show Coupon Toggle Js
		$('.tp-checkout-coupon-form-reveal-btn').on('click', function () {
			$('#tpCheckoutCouponForm').slideToggle(400);
		});

		// 19. Create An Account Toggle Js
		$('#cbox').on('click', function () {
			$('#cbox_info').slideToggle(900);
		});

		// 20. Shipping Box Toggle Js
		$('#ship-box').on('click', function () {
			$('#ship-box-info').slideToggle(1000);
		});
	}
	tp_ecommerce();

	// 09. Sticky Header Js 
	windowOn.on('scroll', function () {
		var scroll = windowOn.scrollTop();
		if (scroll < 400) {
			$("#header-sticky").removeClass("header-sticky");
		} else {
			$("#header-sticky").addClass("header-sticky");
		}
	});

	// 10. Nice Select Js
	$('select').niceSelect();
	$('.tp-select-2 select').niceSelect();

	// 11. Jquery Appear raidal
	if (typeof ($.fn.knob) != 'undefined') {
		$('.knob').each(function () {
			var $this = $(this),
				knobVal = $this.attr('data-rel');

			$this.knob({
				'draw': function () {
					$(this.i).val(this.cv + '%')
				}
			});

			$this.appear(function () {
				$({
					value: 0
				}).animate({
					value: knobVal
				}, {
					duration: 2000,
					easing: 'swing',
					step: function () {
						$this.val(Math.ceil(this.value)).trigger('change');
					}
				});
			}, {
				accX: 0,
				accY: -150,
			});
		});
	}
	
	// 12. Counter Js
	new PureCounter();
	new PureCounter({
		filesizing: true,
		selector: ".filesizecount",
		pulse: 2,
	});

	// 13. Jarallax Js
	if ($('.jarallax').length > 0) {
		$('.jarallax').jarallax({
			speed: 0.2,
			imgWidth: 1366,
			imgHeight: 768
		});
	};

	// 14. Parallax Js
	if ($('.scene').length > 0) {
		$('.scene').parallax({
			scalarX: 10.0,
			scalarY: 15.0,
		});
	};

	if ($('.scene-2').length > 0) {
		$('.scene-2').parallax({
			scalarX: 15.0,
			scalarY: 15.0,
		});
	};

	// 15. One Page Scroll Js
	function scrollNav() {
		$('.tp-onepage-menu li a').click(function () {
			$(".tp-onepage-menu li a.active").removeClass("active");
			$(this).addClass("active");

			$('html, body').stop().animate({
				scrollTop: $($(this).attr('href')).offset().top - 100
			}, 300);
			return false;
		});
	}
	scrollNav();

	// * Wow Js
	new WOW().init();

	// * Masonary Js
	$('.grid').imagesLoaded(function () {
		var $grid = $('.grid').isotope({
			itemSelector: '.grid-item',
			percentPosition: true,
			masonry: {
				columnWidth: '.grid-item',
			}
		});

		// filter items on button click
		$('.masonary-menu').on('click', 'button', function () {
			var filterValue = $(this).attr('data-filter');
			$grid.isotope({ filter: filterValue });
		});

		//for menu active class
		$('.masonary-menu button').on('click', function (event) {
			$(this).siblings('.active').removeClass('active');
			$(this).addClass('active');
			event.preventDefault();
		});

	});

	// * magnificPopup img view
	$('.popup-image').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true
		}
	});

	// * magnificPopup video view
	$(".popup-video").magnificPopup({
		type: "iframe",
	});


})(jQuery);