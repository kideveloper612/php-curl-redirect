jQuery(document).ready(function($) {

	if ($('.img-radio input:checked').length) {
		$('.img-radio input:checked').parent('.img-radio').addClass('active');
	}

	$('body').on('change', '.img-radio input', function() {

		var form = $(this).parents('form');

		if ($('.img-radio.active', form).length) {
			$('.img-radio.active', form).removeClass('active');
		}

		if ($(this).prop('checked')) {
			$(this).parent().addClass('active');
		}

	});

	$('body').on('submit', 'form.details', function(event) {

		var validationErrors = false;
		var form = $(this);

		if ($('[name="county"]', this).length && $('[name="county"]', this).val().trim() == '') {
			validationErrors = true;
			alert('Please enter your county.');
		}

		if ($('[name="address"]', this).length && $('[name="address"]', this).val().trim() == '') {
			validationErrors = true;
			alert('Please enter your address.');
		}

		if ($('[name="postcode"]', this).length && $('[name="postcode"]', this).val().trim() == '') {
			validationErrors = true;
			alert('Please enter your postcode.');
		}

		if ($('[name="towncity"]', this).length && $('[name="towncity"]', this).val().trim() == '') {
			validationErrors = true;
			alert('Please enter your town / city.');
		}

		if (validationErrors) {
			event.preventDefault();
		} else {
			$('.disableonsubmit', this).prop('disabled', true);
		}

	});

	$('body').on('submit', '.signup-form form', function(event) {

		var validationErrors = false;
		var form = $(this);

		if (!$('.img-radio.active', form).length) {
			validationErrors = true;
			alert('Please select your gender.');
		}

		if ($('[name="firstname"]', form).val().trim() == '') {
			validationErrors = true;
			alert('Please enter your first name.');
		}

		if ($('[name="lastname"]', form).val().trim() == '') {
			validationErrors = true;
			alert('Please enter your last name.');
		}

		if ($('[name="email"]', form).val().trim() == '') {
			validationErrors = true;
			alert('Please enter your email address.');
		}

		if ((
			$('[name="dob_day"]', form).val() == null || $('[name="dob_day"]', form).val().trim() == ''
		) || (
			$('[name="dob_month"]', form).val() == null || $('[name="dob_month"]', form).val().trim() == ''
		) || (
			$('[name="dob_year"]', form).val() == null || $('[name="dob_year"]', form).val().trim() == ''
		)) {
			validationErrors = true;
			alert('Please enter your full date of birth.');
		}

		if (validationErrors) {
			event.preventDefault();
		} else {
			$('.disableonsubmit', this).prop('disabled', true);
		}

	});

	$('body').on('click touch', '[data-action="select-all"]', function(event) {

		event.preventDefault();

		$('.panels .panel').each(function() {

			var selector = $('.select-panel', this);

			if (!selector.hasClass('selected')) {
				selector.trigger('click');
			}

		});

		$('[data-action="select-all"]').each(function() {
			$(this).text($(this).attr('data-selectedall'));
			$(this).addClass('active');
		});

		$('html, body').animate({
			scrollTop: ($('#submit-btn').offset().top - ($(window).height() / 2)) + 'px'
		});

	});

	$('body').on('click touch', '.select-panel', function(event) {

		event.preventDefault();

		var checkbox = $(this).prev('input');

		if (checkbox.is(':checked')) {
			checkbox.prop('checked', false);
		} else {
			checkbox.prop('checked', true);
		}

		$(this).toggleClass('selected');

		if ($(this).text() == $(this).attr('data-select')) {
			$(this).text($(this).attr('data-selected'));
		} else {

			if ($('#select-all').hasClass('active')) {

				$('[data-action="select-all"]').each(function() {
					$(this).removeClass('active').text($(this).attr('data-selectall'));
				});

			}

			$(this).text($(this).attr('data-select'));

		}

	});

	$('body').on('click touch', '.nav-toggle', function() {
		$(this).toggleClass('active');
	});

	$(window).on('scroll', function() {
		navToggleColour();
		animation();
	});

	quotesSlider();
	navToggleColour();
	animation();

	$('body').on('click touch', '.accordions .accordion .title', function(event) {

		var accordion = $(this).parent('.accordion');

		if (accordion.hasClass('active')) {

			$('.title .icon', accordion).removeClass('icon-minus').addClass('icon-plus');

			$('.content', accordion).stop().slideUp();
			accordion.removeClass('active');

		} else {
			
			if ($(this).parents('.accordions').find('.accordion.active').length) {

				var prevAccordion = $(this).parents('.accordions').find('.accordion.active');

				$('.title .icon', prevAccordion).removeClass('icon-minus').addClass('icon-plus');

				$('.content', prevAccordion).stop().slideUp();
				prevAccordion.removeClass('active');

			}

			$('.title .icon', accordion).removeClass('icon-plus').addClass('icon-minus');

			$('.content', accordion).stop().slideDown();
			accordion.addClass('active');

		}

	});

});

function quotesSlider() {

	if ($('.quotes-slider').length) {

		var quotes = [];

		$('.quotes-slider .quote').each(function() {
			quotes.push($(this).html());
			$(this).remove();
		});

		$('.quotes-slider').removeClass('init-slider');

		var minTop = parseInt($('.quotes-slider').next('div').outerHeight());
		var maxTop = parseInt($('.banner-overlay').outerHeight()) - 300 - 150;
		var maxTopRight = maxTop - 50;

		var left = 10;
		var right = 30;

		if ($(window).width() >= 1200) {
			left = 140;
			right = 200;
		}

		var positions = {
			"left": {
				"top": Math.floor(Math.random() * maxTop) + minTop,
				"left": left
			},
			"right": {
				"top": Math.floor(Math.random() * maxTopRight) + minTop,
				"right": right
			}
		};

		$('.quotes-slider').append('<div data-quote="0" class="quote left faded" style="top:' + positions.left.top + 'px;left:' + positions.left.left + 'px;">' + quotes[0] + '</div>');
		$('.quotes-slider').append('<div data-quote="1" class="quote right faded" style="top:' + positions.right.top + 'px;right:' + positions.right.right + 'px;">' + quotes[1] + '</div>');

		setTimeout(function() {
			$('.quotes-slider .quote').removeClass('faded');
		}, 0);

		setInterval(function() {

			var currentLeft = $('.quotes-slider .quote.left');
			var currentRight = $('.quotes-slider .quote.right');

			var last = parseInt($('.quotes-slider .quote:last-child').attr('data-quote'));

			var left = last + 1;

			if (left > quotes.length - 1) {
				left = 0;
			}

			right = left + 1;

			if (right > quotes.length - 1) {
				right = 0;
			}

			positions = {
				"left": {
					"top": Math.floor(Math.random() * maxTop) + minTop,
					"left": left
				},
				"right": {
					"top": Math.floor(Math.random() * maxTopRight) + minTop,
					"right": right
				}
			};

			$('.quotes-slider').append('<div data-quote="' + left + '" class="quote faded left" style="top:' + positions.left.top + 'px;left:' + positions.left.left + 'px;">' + quotes[left] + '</div>');
			$('.quotes-slider').append('<div data-quote="' + right + '" class="quote faded right" style="top:' + positions.right.top + 'px;right:' + positions.right.right + 'px;">' + quotes[right] + '</div>');

			setTimeout(function() {

				$('.quotes-slider .quote').removeClass('faded');

				currentLeft.addClass('faded');
				currentRight.addClass('faded');

				setTimeout(function() {
					currentLeft.remove();
					currentRight.remove();
				}, 325);

			}, 0);

		}, 4500);

	}

}

function navToggleColour() {

	var scrollTop = parseInt($(window).scrollTop());

	var bannerHeight = parseInt($('.banner').height());
	var bannerPaddingBottom = parseInt($('.banner').css('padding-bottom'));

	var offset = 30;

	if (scrollTop > (bannerHeight - bannerPaddingBottom - offset)) {
		$('.nav-toggle').addClass('dark');
	} else {
		$('.nav-toggle').removeClass('dark');
	}

}

function animation() {

	fancyText();

	const scrollY = $(window).scrollTop() + (($(window).height() / 3 * 2));

	let wait = 0;

	$('.big-number').each(function() {

		let number = this;

		let thisY = $(number).offset().top;

		if ($(number).hasClass('active') && scrollY < thisY) {
			$(number).removeClass('active');
		} else if (!$(number).hasClass('active') && scrollY >= thisY) {

			setTimeout(function() {
				$(number).addClass('active');
			}, wait);

		};

		wait += 500

	});

}

function fancyText() {

	const scrollY = $(window).scrollTop() + (($(window).height() / 3) * 2);

	$('.fancytext strong').each(function() {

		let thisY = $(this).offset().top;

		if (!$(this).hasClass('fancied')) {

			if (scrollY >= thisY) {

				let string = $(this).text().split('');
				let fancyString = '';
	
				string.forEach(function(char) {
					fancyString += '<span>' + char + '</span>';
				});
	
				$(this).html(fancyString);
				$(this).addClass('fancied');
	
				fadeInFancy($('span:first-child', this));
	
			}

		} else if (scrollY < thisY) {

			if ($('span.faded', this).length) {
				$('span.faded', this).removeClass('faded');
				$(this).removeClass('fancied');
			}

		}

	});

}

function fadeInFancy(element) {

	let next = element.next('span');
	element.addClass('faded');

	if (next.length) {

		setTimeout(function() {
			fadeInFancy(next);
		}, 50);

	}

}