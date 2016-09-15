$(document).ready(function(){
	//alert($(".news__small-image").height());
	
	$(".popup_button").magnificPopup();
	
	$('.carousel').flickity({
	// options
	cellAlign: 'center',
	contain: true,
	wrapAround: true,
	autoPlay: 5000,
	initialIndex: 1,
	});
	$("#bottom_form").submit(function(){
		var $this = $(this),
			form_data = $this.serialize();	
		$.ajax({
			type: "POST",
			url:"/assets/templates/script/form.php",
			data: form_data,
			success: function(){
				//console.log("123");
				alert("Ваше сообщение отправленно!");
			}
		});
	});
	
	//Верхнее меню
	var menu ={
		items:$('.top-menu__items'),
		image:$('.top-menu__image'),
		button:$('.top-menu__button'),		
	},
		planshet = 910;
	
	$(window).resize(function(){
		var $this = $(this),
			width = window.innerWidth;
		
		if(width > planshet){
			menu.items.attr('style','display:block');
		} else if (width < planshet && menu.image.hasClass('clicked')){	
			menu.items.attr('style','display:block');
		} else if (width<planshet || width==planshet){	
		menu.items.attr('style','display:none');
		}
	});
	
	menu.button.on('click',function(e){
		e.preventDefault();
		var btn = $(this),
			btn_wrap = btn.find('.top-menu__image'),
			items = btn.siblings('.top-menu__items'),
			item = items.children('li'),
			duration = 200;
		if(!btn_wrap.hasClass('clicked')){			
		btn_wrap.addClass('clicked');
        items.stop(true, true).slideDown(duration); 
		}else{					
			btn_wrap.stop(true, true).removeClass('clicked');
        items.stop(true, true).slideUp(duration,function(){
		});
		
		}
	});
/*
* Modernizr
*/
if (!Modernizr.svg) {
  $(".header__logo > img").attr("src", "images/logo.png");
  $(".footer__logo > img").attr("src", "images/logo_white.png");
}
	
});
/*
* Карта Gooqle
*/

var map, 
	mapLat = {lat: 53.338819, lng: 83.745149},
	myTitle = "ООО \«Типография Графика\»";

function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: mapLat,
    zoom: 17,
    maxZoom:20,
    minZoom:10,
    scrollwheel:false
  });
  var marker = new google.maps.Marker({
    position: mapLat,
    map: map,
    title: myTitle,
	animation: google.maps.Animation.DROP
  });
}