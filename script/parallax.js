$(document).ready(function(){
	
	setTimeout(function(){
		$('.header__logo').addClass('is-visibile');
		
		var wScroll = $(window).scrollTop();
		
		
		if(wScroll > $('.production-box').offset().top - $(window).height()){
			$('.production__item').each(function(e){
				setTimeout(function(){					
					$('.production__item').eq(e).addClass('is-visibile');
				},350*(e+1))
			});
		}
	}, 500);
		
		
	$(window).scroll(function(){	
		
	var wScroll = $(window).scrollTop();
		if(wScroll > ($('.footer').offset().top - $(window).height()+50)){
			$('.footer__logo').addClass('is-visibile');	
		}	else{
			$('.footer__logo').removeClass('is-visibile');
		}
		
	console.log(wScroll+":"+($('.footer').offset().top- $(window).height()+250));
	});
});