(function ($, root, undefined) {

	$(function () {

		'use strict';

		// Fade in elements on scroll function
	$(window).scroll(function() {
		$.each( $('.fade-in'), function() {

			var bottom_of_element = $(this).offset().top + $(this).outerHeight();
		   	var bottom_of_window = $(window).scrollTop() + $(window).height();

			if (bottom_of_window > bottom_of_element - 700) {
				$(this).addClass('fade-up');
			}
		});
	});

	$(".top").click(function(){
		$("html").animate({
			scrollTop: 0
		}, 1000);
	});

	$('.contact-form').submit(function(){
		$(this).fadeOut();
		$('#form-header').fadeOut(function(){
			setTimeout(function(){
				$('#form-header').html('Your message has been sent. Thanks <i class="fas fa-hand-peace"></i>');
				$('#form-header').fadeIn();
			},100);
		});
	});

	$(".form-scroll").click(function(){
		$("html").animate({scrollTop: $(".contact-form").offset().top}, 1500)
		$("#form-name").focus();
	});

	$('#mobile-menu-btn').click(function(){
		$('body').css('overflow','hidden');
		$('#mobile-menu').fadeIn();
	});

	$('#mobile-menu-close').click(function(){
		$('body').css('overflow','auto');
		$('#mobile-menu').fadeOut();
	});

	$('.search-overlay-btn').click(function(){
		setTimeout(function(){
			$("input[name='search']").focus();
		},100);
	});

	$('.btn').hover(function(){
		if ($(this).find('btn-arrow') ) {
			$(this).find('i').css('padding-left','9px');
		}
	}, function(){
		if ($(this).find('btn-arrow') ) {
			$(this).find('i').css('padding-left','0');
		}
	});

	window.addEventListener('resize', function(event){
		if( $('#mobile-menu').css('display') == 'none' ){
			$('body').css('overflow','auto');
			$('#mobile-menu').fadeOut();
		}
	});

	$(window).scroll(function(){
		var st = $(this).scrollTop();
		if( st > 70){
			if( $('nav').hasClass('bg-on-scroll') ){
				$('nav').removeClass('bg-transparent');
			}
		} else if( st < 70){
			if( $('nav').hasClass('bg-on-scroll') ){
				$('nav').addClass('bg-transparent');
			}
		}
	});

	// Popup Overlay
	$('[data-popup-open]').click(function(){
		var targeted_popup_class = $(this).attr('data-popup-open');
		$('[data-popup="' + targeted_popup_class + '"]').fadeIn(350).css('display','block');
		$("body").css('overflow','hidden');
	});
	$('[data-popup-close]').click(function(){
		$(".mobile-menu-wrapper").fadeOut();
		var targeted_popup_class = $(this).attr('data-popup-close');
		$('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);
		$("body").css('overflow','auto');
	});

	});

})(jQuery, this);
