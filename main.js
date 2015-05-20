<<<<<<< HEAD
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
=======
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
>>>>>>> 98542174f11297244f0950f67204c40645ffc1ff
});