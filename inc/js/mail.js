// ----------------------------------------
// ! Handle ajax mail
// ----------------------------------------

(function($){

	"use strict"

	// ----------------------------------------
	// ! add some feature
	// ----------------------------------------
	$('form').each(function(){
		$('<input type="hidden">').attr('name','ajax_mail_type').val(mail_options.ajax_mail_type).prependTo($(this));
		$('<input type="hidden">').attr('name','security').val(mail_options.security).prependTo($(this));
		$('<input type="hidden">').attr('name','action').val(mail_options.action).prependTo($(this));
	})

	// ----------------------------------------
	// ! submit
	// ----------------------------------------

	$('form').on('submit',function(e){
		// disable submit event. use ajax instead;
		e.preventDefault();

		// form values to json object;
		var data = {};
		$.each($(this).serializeArray(), function(i,e){
			data[this.name] = this.value;
		})

		// extend the mail options with form data
		data = $.extend({}, data);

		console.log(data);

		// begin mailing
		$('body').addClass('mailing');

		// post to server

		$.ajax({
			url : mail_options.ajax_url,
			type : 'post',
			data : new FormData( this ),
			processData : false,
			contentType : false,
			//dataType : 'json',
			success : function(mail){

				console.log(mail);

				// success
				if(mail.state) {
					$('form')[0].reset();

					alert('发送成功');
				}

				//fail
				else {
					alert('发送失败，请稍候再试，或联系管理员。');
				}

			}
		}).fail(function(){
			alert('发送失败，请稍候再试，或联系管理员。')
		});

	});

	// ----------------------------------------
	// ! show result
	// ----------------------------------------
	$('.mailinfo .close').on('click', 'span', function(){
		$('body').removeClass('mailing');

		$('.mailinfo .success, .mailinfo .fail').addClass('hide');
		$('.mailinfo .sending').removeClass('hide');
	})


})(jQuery)