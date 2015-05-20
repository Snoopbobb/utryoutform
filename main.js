$(function(){

	$('.unchecked').click(function(){
		$(this).toggleClass('checked');
	});

	$('.launch-yes').click(function(){
		$(this).toggleClass('checked');
		$('.launch-no').removeClass('checked');
	});

	$('.launch-no').click(function(){
		$(this).toggleClass('checked');
		$('.launch-yes').removeClass('checked');
	});

	$('.updates-yes').click(function(){
		$(this).toggleClass('checked');
		$('.updates-no').removeClass('checked');
	});

	$('.updates-no').click(function(){
		$(this).toggleClass('checked');
		$('.updates-yes').removeClass('checked');
	});
});