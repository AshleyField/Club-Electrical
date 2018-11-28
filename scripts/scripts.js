$(function(){

	var navState = $('.header').data('nav');

	$('.header-inner i').on('click', function(){

		if(navState == 'closed'){
			$('nav').addClass('open-nav');
			navState = 'open';
		}
	});

	$('nav i').on('click', function(){
		if(navState == 'open'){
			$('nav').removeClass('open-nav');
			navState = 'closed';
		}
	})

	if($('#login-page')){
		$('.login-buttons-login').on('click', function(){
			if($(this).hasClass('active-button')){

			}

			else {
				$(this).addClass('active-button');
				$('.login-buttons-register').removeClass('active-button');
				$('.login-register').addClass('hide-login');
				$('.login-login').removeClass('hide-login');
			}
		})

		$('.login-buttons-register').on('click', function(){
			if($(this).hasClass('active-button')){

			}

			else {
				$(this).addClass('active-button');
				$('.login-buttons-login').removeClass('active-button');
				$('.login-login').addClass('hide-login');
				$('.login-register').removeClass('hide-login');
			}
		})

	}

});