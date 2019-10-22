// sticky header starts here
$(function(){
	$(window).scroll(function(){
		var scroll = Math.floor($(window).scrollTop()); 
		var header = $('header').height();
		var nav = $('nav').height();

		if(scroll > header+nav){
			$('header').addClass('stick-header');
		}
		else{
			$('header').removeClass('stick-header');
		}		
	});
});
// sticky header ends here