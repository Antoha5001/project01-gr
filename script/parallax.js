$(document).ready(function(){
	
	
	setTimeout(function(){
		$('.header__logo').addClass('is-visibile');
	}, 500);
	
	$(window).scroll(function(){
		
		var wScroll = $(window).scrollTop();
		console.log(wScroll);
	});
});