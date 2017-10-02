$(document).ready(main);

function main(){
	
	$('.submenu').click(function(){
		$(this).children('.push').slideToggle();
	});
	
	$('.push').click(function(e){
		e.stopImmediatePropagation();
	});

	$('.group').equalize({
		children: 'h3'
	});
	
	$('.rslides').equalize({
		children: 'li'
	});
	
	$('.group').equalize({
		children: 'h3'
	});
	
	$('main').hide().slideDown(2500);
	
	$("a.icon-back").click(function(e) {
    e.preventDefault();
    history.back(1);
	});
	
	$(".rslides").responsiveSlides({
			auto: true,
			pager: true,
			nav: true,
			speed: 500,
			maxwidth: 800,
			namespace: "centered-btns"
	});
	
	$.scrollUp({
		scrollImg: true,
		scrollDistance: '100',
		animation: 'slide',
	});
}

