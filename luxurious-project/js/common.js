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


	$('.price').click(function(){
		
		$('.price').toggleClass('click');

		if($('.price').hasClass('click')){
			$('.price .click').text('+');
		}
		else{
			$('.price .click').text('-')
		}
	});

	$('.price').click(function(){
		$('.price-open').toggle();
	});
	// for price-------------------------


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
});
// filters click change icon ends here