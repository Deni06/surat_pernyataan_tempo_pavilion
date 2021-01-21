;(function($) {
	"use strict";
	
	$(document).ready(function() {

		var $win = $(window);
		var $doc = $(document);

		// Load Foundation
		$(document).foundation();

		// Intro Small 
		$('.intro-small .intro-image').stellar({
			horizontalScrolling: false,
			verticalOffset: 40
		});

		//FullSize Image
		var attrSrc;
		function fullsizeImageHelper () {
			$('.fullsize-image').each(function () {
				attrSrc = $(this).attr('src');
				$(this)
					.closest('.fullsize-image-container')
					.css('background-image', 'url(' + attrSrc + ')');
			});
		}

		fullsizeImageHelper();

		//Intro Slider
		var introSlider = $('.intro-slider .slides').bxSlider({
			auto: true,
			pager: false,
			autoControls: true,
			autoHover: true
		});

		var sliderTestimonials;
		$win.on('load', function () {
			sliderTestimonials = $('.slider-testimonials .slides').bxSlider({
				auto: true,
				pager: false,
				adaptiveHeight: true,
				maxSlides: 1,
				minSlides: 1,
				moveSlides: 1,
				slideWidth: 1030
			});

			$('.bx-controls-direction a').on('click', function (event) {
				event.preventDefault();

				if($(this).parents().hasClass('slider-testimonials')) {
					sliderTestimonials.stopAuto();
					sliderTestimonials.startAuto();
				}
			});

		});

		$('.field-date').fdatepicker();

		// Waypoint
		var itemIndex;
		$('.waypoint').on('click', function (event) {
			event.preventDefault();

			itemIndex = $(this).attr('href');

			$('body, html').animate({scrollTop: $(itemIndex).offset().top - 40}, 1000)
		});

		// Tabs
		var currentItem;
		$('.tabs .list-services a').on('click', function (event) {
			event.preventDefault();

			currentItem = $(this).attr('href');

			$(this)
				.parent()
				.addClass('current')
				.siblings()
				.removeClass('current');

			$(currentItem)
				.addClass('current')
				.siblings()
				.removeClass('current');

			$('video').each(function () {
				$(this)[0].pause();
				$('.btn-play').show();
			});
			
		});

		//Slider Services
		var sliderList = $('.list-services-slider').bxSlider({
			pager: false,
			minSlides: 1,
			maxSlides: 6,
			moveSlides: 1,
			slideWidth: 200,
			infiniteLoop: false,
			hideControlOnEnd: true
		});

		$('.bx-controls-direction a').on('click', function (event) {
			event.preventDefault();

			if($(this).parents().hasClass('intro-slider')) {
				introSlider.stopAuto();
				introSlider.startAuto();
			}

			if($(this).parents().hasClass('list-services-slider')) {
				sliderList.stopAuto();
				sliderList.startAuto();	
			}
		});

		// FitVids
		$('.service-video').fitVids();

		var $video;
		$('video').click(function(event) {
			event.preventDefault();
			$video = $(this);

			$video.addClass('active');

			if($video.get(0).paused) {
				$video.get(0).play()
				$video.next().fadeOut()
			} else {
				$video.get(0).pause();
				$video.next().show()
			}
		});

		// Tablet Nav
		$('.nav li').each(function () {
			if($(this).find('.nav-dropdown').length) {
				$(this).addClass('has-dropdown');
			}
		});

		// Event Slider
		var $slider;
		$('.event-slider ').each(function () {
			$slider = $(this).find('.slides');

			$slider.bxSlider({
				auto: true,
				pager: false
			});
		});

		var $listItem;
		$('.nav li.has-dropdown > a').on('click', function (event) {
			$listItem = $(this).parent();
			if($win.width() < 1025) {
				event.preventDefault();
			}

			$listItem
				.toggleClass('active')	   			
				.siblings()
				.removeClass('active');

			if($win.width() < 768) {
				$listItem
					.children('.nav-dropdown')
					.slideToggle();
			}	
		});

		// Mobile Nav
		$('.btn-menu').on('click', function (event) {
			event.preventDefault();

			$(this)
				.toggleClass('active');

			$('.nav').slideToggle();
			$('.nav-dropdown').slideUp();	
		});

		var isMobileWidth = false;
		function resizeHelper () {
			if($win.width() < 768) {
				if(isMobileWidth) {
					return;
				}

				isMobileWidth = true;

			} else {
				if(!isMobileWidth) {
					return;
				}

				isMobileWidth = false;
				$('.nav').show();
				$('.nav-dropdown').removeAttr('style');
			}
		}

		$win.on('resize', function () {
			resizeHelper();
			$('.intro-slider .bx-start').trigger('click');
		});

		$('audio').mediaelementplayer();

		var tagName;

		$('form').each(function () {
			$(this).validate({
				highlight: function(element, errorClass) {
					tagName = element.tagName.toLowerCase();

					if(tagName === 'select') {
						$(element)
							.closest('.selecter')
							.addClass('error');
					} else {
						$(element).addClass('error');
					}
				},
				focusCleanup: true,
				rules: {
					name: "required",
					email: {
						required: true,
						email: true
					}
				},
				errorPlacement: function (error, element) {
					$(element)
						.closest('form')
						.find('.message-error')
						.addClass('active');
				},
				submitHandler: function(form) { 
					$(form).submit(function () {
						$(this).ajaxSubmit();

						return false;
					});
				}
			});
		});

		$(function(){
			$.stellar({
				horizontalScrolling: false,
				verticalOffset: 300
			});
		});
	});
})(jQuery);
