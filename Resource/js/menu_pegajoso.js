$(document).ready(function(){
	var altura = $('#menu-holder').offset().top;
	
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('#menu-holder').addClass('menu-fixed');
		} else {
			$('#menu-holder').removeClass('menu-fixed');
		}
	});
 
});