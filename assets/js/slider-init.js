/***************************************************
==================== JS INDEX ======================
****************************************************
01. tp-Main-slider
02. portfolio
03. portfolio-2
04. Service
05. Events
06. brand
07. text-slider
08. testimonial
09. testi-3
10. testi-4
11. shop
12. team-3
****************************************************/

(function ($) {
	"use strict";

	// 01. tp-Main-slider
	var slider1Swiper = new Swiper('.tp-slider-1-active', {
		speed: 1000,
		loop: true,
		slidesPerView: 1,
		spaceBetween: 30,
		autoplay: true,
		effect: 'fade',
		breakpoints: {
			'1400': {
				slidesPerView: 1,
			},
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
		pagination: {
			el: ".tp-pagination-dots, .tp-pagination-number",
			clickable: true,
			renderBullet: function (index, className) {
				return '<span class="' + className + '">' + (index + 1) + "</span>";
			},
		},

		navigation: {
			prevEl: '.prev',
			nextEl: '.next',
		}
	});

	// 02. portfolio
	var portSwiper = new Swiper('.tp-port-active', {
		speed: 1000,
		loop: true,
		slidesPerView: 4,
		spaceBetween: 30,
		autoplay: true,
		effect: 'slide',
		breakpoints: {
			'1400': {
				slidesPerView: 4,
			},
			'1200': {
				slidesPerView: 4,
			},
			'992': {
				slidesPerView: 3,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 2,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		pagination: {
			el: ".tp-pagination-dots",
			clickable: true,
		},
	});

	// 03. portfolio-2
	var portSwiper = new Swiper('.tp-portfolio-2-active', {
		speed: 1000,
		loop: true,
		slidesPerView: 4,
		spaceBetween: 30,
		autoplay: true,
		effect: 'slide',
		breakpoints: {
			'1400': {
				slidesPerView: 4,
			},
			'1200': {
				slidesPerView: 4,
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
		pagination: {
			el: ".tp-pagination-dots",
			clickable: true,
		},
	});

	// 04. Service
	var serviceSwiper = new Swiper('.tp-service-2-active', {
		speed: 1000,
		loop: true,
		slidesPerView: 4,
		spaceBetween: 30,
		autoplay: true,
		effect: 'slide',
		breakpoints: {
			'1400': {
				slidesPerView: 4,
			},
			'1200': {
				slidesPerView: 4,
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
		navigation: {
			prevEl: '.prev',
			nextEl: '.next',
		}
	});

	// 05. Events
	var eventsSwiper = new Swiper('.tp-events-active', {
		speed: 1000,
		loop: true,
		slidesPerView: 2,
		spaceBetween: 30,
		autoplay: true,
		effect: 'slide',
		breakpoints: {
			'1400': {
				slidesPerView: 2,
			},
			'1200': {
				slidesPerView: 2,
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
		navigation: {
			prevEl: '.prev',
			nextEl: '.next',
		}
	});

	// 06. brand
	var brandSwiper = new Swiper('.tp-brand-active', {
		speed: 1500,
		loop: true,
		centeredSlides: true,
		slidesPerView: 5,
		spaceBetween: 30,
		autoplay: true,
		effect: 'slide',
		breakpoints: {
			'1400': {
				slidesPerView: 5,
			},
			'1200': {
				slidesPerView: 5,
			},
			'992': {
				slidesPerView: 5,
			},
			'768': {
				slidesPerView: 4,
			},
			'576': {
				slidesPerView: 3,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});

	// 07. text-slider
	var textSlide = new Swiper(".tp-text-slider-active", {
		loop: true,
		freemode: true,
		slidesPerView: 'auto',
		spaceBetween: 30,
		centeredSlides: true,
		allowTouchMove: false,
		speed: 18000,
		autoplay: {
			delay: 1,
			disableOnInteraction: true,
		},
	});

	// 08. testimonial
	var testiSwiper = new Swiper('.tp-testimonial-active', {
		speed: 1000,
		loop: true,
		slidesPerView: 2,
		spaceBetween: 30,
		autoplay: true,
		effect: 'slide',
		breakpoints: {
			'1400': {
				slidesPerView: 2,
			},
			'1200': {
				slidesPerView: 2,
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
		}
	});

	// 09. testi-3
	var testiSwiper = new Swiper('.tp-testi-3-active', {
		speed: 1000,
		loop: true,
		slidesPerView: 1,
		spaceBetween: 30,
		autoplay: true,
		effect: 'slide',
		breakpoints: {
			'1400': {
				slidesPerView: 1,
			},
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
		pagination: {
			el: ".tp-pagination-dots",
			clickable: true,
		},
	});

	// 10. testi-4
	var testiSwiper = new Swiper('.tp-testi-4-active', {
		speed: 1000,
		loop: true,
		slidesPerView: 1,
		spaceBetween: 30,
		autoplay: true,
		effect: 'slide',
		breakpoints: {
			'1400': {
				slidesPerView: 1,
			},
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
		navigation: {
			prevEl: '.prev',
			nextEl: '.next',
		}
	});

	// 11. shop
	var shopSwiper = new Swiper('.tp-shop-active', {
		speed: 1000,
		loop: true,
		slidesPerView: 1,
		spaceBetween: 30,
		autoplay: true,
		effect: 'slide',
		breakpoints: {
			'1400': {
				slidesPerView: 4,
			},
			'1200': {
				slidesPerView: 4,
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
		navigation: {
			prevEl: '.prev',
			nextEl: '.next',
		}
	});

	// 12. team-3
	var testiSwiper = new Swiper('.tp-team-3-active', {
		speed: 1000,
		loop: true,
		slidesPerView: 3,
		spaceBetween: 30,
		autoplay: true,
		effect: 'slide',
		breakpoints: {
			'1400': {
				slidesPerView: 3,
			},
			'1200': {
				slidesPerView: 3,
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
		}
	});

})(jQuery);