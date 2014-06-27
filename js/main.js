(function($) {

	"use strict";

	// ----------------------------------------
	// ! form validate
	// ----------------------------------------
	$('form [data-required] :input')
		.each(function(i, e) {
			$(this).not('[required]').on('beginValid', function() {
				$(this).attr('required', 'required');
			});
			$(this).on('stopValid', function() {
				$(this).removeAttr('required');
			});

			$(this).on('focus', function() {
				$(this).trigger('beginValid');
			});
			$(this).on('keyup', function() {
				$(this).closest('form').trigger('validate');
			})
		})
		.closest('form')
		.on('validate', function() {
			var $group = $(this).find('[data-required]');

			if ($group.size() == $group.find('[required]').size()) {
				var invlid_count = $group.find(':invalid').size();
				(invlid_count == 0) ? $(this).find(':submit[disabled]').removeAttr('disabled') : $(this).find(':submit').attr('disabled', 'disabled');
			}
		})
		.on('reset', function() {
			$(this).find(':submit').attr('disabled', 'disabled');
			$(this).find(':input').each(function(i, e) {
				$(this).trigger('stopValid');
			})
		});

	// ----------------------------------------
	// ! faq list maker
	// ----------------------------------------

	var faq_nav_builder = function() {
		var $items = $('.faq .item-list h4'),
			$nav_wrapper = $('.faq .item-nav ul');

		// start bulding
		$items.each(function(i, e) {

			var $new_item = $('<div class="item"></div>');

			// add id
			$(this).attr('id', 'faq' + i);

			// wrap the title and content
			$new_item.append($(this).clone());

			if ($items.size() > (i + 1)) {
				$(this).nextUntil('h4').each(function(i, e) {
					$(this).clone().appendTo($new_item);
					$(this).remove();
				})
			}
			// the last one special process
			else {
				$(this).nextAll().each(function(i, e) {
					$(this).clone().appendTo($new_item);
					$(this).remove();
				})
			}

			// add navigation item
			$('<li><a href="#' + $(this).attr('id') + '">' + $(this).html() + '</a></li>').appendTo($nav_wrapper);

			// wrap in item div
			$(this).replaceWith($new_item);
		})
	}();

	// ----------------------------------------
	// ! search faq
	// ----------------------------------------
	$('.faq form')
		.on('reset', function(e) {
			e.preventDefault();
			$(this).find('input').trigger('init');
		})
		.find('input')
		.on('refresh', function() {

			var keywords = $(this).val(),
				$items = $('.faq .item-list .item');

			if (keywords == "") {
				$items.each(function(i, e) {
					$(this).removeClass('hide');
					$('.item-nav ul li').eq(i).removeClass('hide');
				})
				return;
			}

			console.log('2');
			// loop items and match them with the keywords
			$items.each(function(i, e) {

				if ($(this).text().toLowerCase().match(keywords.toLowerCase())) {
					$(this).removeClass('hide');
					$('.item-nav ul li').eq(i).removeClass('hide');
				} else {
					$(this).addClass('hide');
					$('.item-nav ul li').eq(i).addClass('hide');
				}
			})
		})
		.on('init', function() {
			$(this).val("");
			$(this).trigger('refresh');
		})
		.on('keyup', function() {
			$(this).trigger('refresh');
		})

	// mobile navigation
	$('.mobile-nav-trigger').on('click', function(e) {
		e.preventDefault();

		$('.page').toggleClass('open-nav');
		$('.mobile-nav-mask').toggleClass('mask-close');
	})

	$('.mobile-nav-mask').on('click', function() {
		$('.mobile-nav-trigger').click();
	})

	function close_mast() {
		$('.mobile-nav-mask').css('display', 'none');
	}


	// ----------------------------------------
	// ! single page
	// ----------------------------------------

	$('body').scrollspy({
		target: '.in-page-nav'
	});

	// var affix_top = $('.in-page-nav').offset().top;
	// $('.in-page-nav').affix({
	// 	offset: {
	// 		top: affix_top,
	// 	}
	// })

})(jQuery)