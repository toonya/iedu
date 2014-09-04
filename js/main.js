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

	// ----------------------------------------
	// ! header dropdown
	// ----------------------------------------

	$.fn.renderDropdownList = function(options) {
		return this.each(function(){
			var data = $(this).data();
			var options = $.extend({}, options, data);
			options.$this = $(this);
			new renderDropdownList(options);
		})
	}

	var renderDropdownList = function(options){
		this.init(options);
	}

	renderDropdownList.prototype = {
		init: function(options) {
			this.options = options;
			this.bind();
			this.render();
		},
		bind: function() {
			$( window ).resize( $.proxy(function() {
				this.render();
			}, this) )
		},
		render: function() {

			$('.sub-menu.dropdown-menu')
			.width(function(){
				return $('body').width();
			})
			.css('left', function(){
				return '-'+$(this).closest('li.dropdown').offset().left+'px';
			})
		
		}
	}

	$('.sub-menu.dropdown-menu').renderDropdownList();

	// ----------------------------------------
	// ! adjust the archive page bg size
	// ----------------------------------------

	$.fn.bgSizeReset = function(options) {
		return this.each(function(){
			var data = $(this).data();
			var options = $.extend({}, options, data);
			options.$this = $(this);
			new bgSizeReset(options);
		})
	}

	var bgSizeReset = function(options){
		this.init(options);
	}

	bgSizeReset.prototype = {
		init: function(options) {
			this.options = options;
			this.bind();
			this.render();
		},
		bind: function() {
			$( window ).resize( $.proxy(function() {
				this.render();
			}, this) )
		},
		render: function() {

			$('.custom-post-type').css('background-size', function(){
				return ( ($(this).outerHeight()/$('body').outerWidth()) <= 1080/1920 ) ? 'cover' : 'contain'; 
			})
		
		}
	}

	$('.custom-post-type').bgSizeReset();

	// ----------------------------------------
	// ! mobile navigation
	// ----------------------------------------
	$(document).on('click', '[data-mobile-trigger]', function(e){
		e.preventDefault();

		$('body').toggleClass('mobile-nav-open');

		//js version, not good on mobile
		//TweenMax.to( $('body'), .35, {left:'240px'} );
		//TweenMax.to( $('.mobile-nav-mask'), .35, {left:'240px'} );
	})
	.on('click', '.mobile-nav-mask', function(){
		$('body').removeClass('mobile-nav-open');

		//js version, not good on mobile
		//TweenMax.to( $('body'), .35, {left:'0'} );
		//TweenMax.to( $('.mobile-nav-mask'), .35, {left:'0'} );
	})

	// ----------------------------------------
	// ! count down
	// ----------------------------------------
	$('[data-type="countDown"]').each( function(i,e) {
		var finish = $(this).data('time'),
			countDown = moment().twix(finish, 'YYYYMMDD').count('days');
		//console.log(finish);
		//console.log(countDown);
		if( moment(finish,'YYYYMMDD',true).isValid() && countDown>0 )
			//$(this).text('倒计时 '+countDown+' 天').addClass('text-warning');
			$(this).text('优惠倒计时'+countDown+' 天').addClass('text-warning');
		else if (moment(finish,'YYYYMMDD',true).isValid() && countDown<0)
			//$(this).text('优惠活动已结束').addClass('text-muted')
			$(this).text('').addClass('hide');
		else
			$(this).text('优惠活动进行中').addClass('text-success')
	})

	// ----------------------------------------
	// ! discount time calculate
	// ----------------------------------------
	$('[data-translate="time"]').each(function(i,e){
		var time = $(e).data('time');

		if ( time && moment(time,'YYYYMMDD',true).isValid()) {
			time = moment( time, 'YYYYMMDD' ).format( 'YYYY年MM月DD日' );
		}

		else {
			time = moment().format( 'YYYY年MM月DD日' );
		}

		$(e).text(time);
	})

	var time_group = $('[data-time-container]').find('[data-translate="time"]');

	if( moment( $(time_group[1]).data('time') , 'YYYYMMDD').diff( moment( $(time_group[0]).data('time'), 'YYYYMMDD'))  < 0 ) {
		var old = [];

		time_group.each(function(i,e){
			old[i] = $(e).clone();
		});

		$(time_group[0]).replaceWith(old[1]);
		$(time_group[1]).replaceWith(old[0]);
	}

	// ----------------------------------------
	// ! mark like
	// ----------------------------------------
	$(document).on('click', '[data-ride="mark-like"]', function(e){
		e.preventDefault();

		var id = $(this).data('id'),
			name = 'single'+id,
		    mark = $.cookie(name);

		if( !mark ){
			$.cookie(name,'like', { expires: 3650 });
			$(this).addClass('like');
		}

		else {
			$.removeCookie(name);
			$(this).removeClass('like');
		}
	})

	var init_like = function(e){
		var target = $('[data-ride="mark-like"]'),
			id = target.data('id'),
			name = 'single'+id,
		    mark = $.cookie(name);

		if( mark && mark == 'like' ) {
			target.addClass('like');
		}
	}

	init_like();

	// ----------------------------------------
	// !  comment here
	// ----------------------------------------
	if( $('.in-page-nav').size() >= 1 ) {
		var static_navigation_trigger_y = $('.in-page-nav').first().offset().top;
		//console.log(static_navigation_trigger_y);
		$(window).scroll(function(){
			if( $(this).scrollTop() >= static_navigation_trigger_y)
				$('.static-navigation').removeClass('hide');
			else
				$('.static-navigation').addClass('hide');
		})
	}

	// ----------------------------------------
	// ! clear wpautop br
	// ----------------------------------------
	var clear_br = function(e){
		var next = e.next();

		if(next.is('br'))
			next.remove();
	}

	$('.custom-single title').each(function(i,e){
		clear_br($(e));
	});

	$('.custom-single content').each(function(i,e){
		clear_br($(e));
	});


})(jQuery)