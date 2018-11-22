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

});