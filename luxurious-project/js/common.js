// filters click change icon starts here
$(document).ready(function(){
	$('.brand').click(function(){
		
		$('.brand').toggleClass('click');

		if($('.brand').hasClass('click')){
			$('.brand .click').text('+');
		}
		else{
			$('.brand .click').text('-')
		}
	});

	$('.brand').click(function(){
		$('.brand-open').toggle();
	});
	// for brand-------------------------


	$('.sort-by').click(function(){
		
		$('.sort-by').toggleClass('click');

		if($('.sort-by').hasClass('click')){
			$('.sort-by .click').text('+');
		}
		else{
			$('.sort-by .click').text('-')
		}
	});

	$('.sort-by').click(function(){
		$('.sort-by-open').toggle();
	});
	// sort by---------------------------


	$('.releated').click(function(){
		
		$('.releated').toggleClass('click');

		if($('.releated').hasClass('click')){
			$('.releated .click').text('+');
		}
		else{
			$('.releated .click').text('-')
		}
	});

	$('.releated').click(function(){
		$('.releated-open').toggle();
	});
	// releated---------------------------
});
// filters click change icon ends here

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

// sticky sidebar starts here
$(document).ready(function(){
	$('.stick').stickySidebar({
		containerSelector: '.sticky-content',
		innerWrapperClass: 'sidebar__inner',
		topSpacing: 35,
		bottomSpacing: 15
	});
});
// sticky sidebar ends here