$(window).on('load',function() {
	$('.bek-preloader-one-out3').addClass('completeleft');
	$('.bek-preloader-one-out4').addClass('completeright');
	$('.bek-preloader-one-out2').addClass('completespan');
	$('.bek-preloader-one-out1').addClass('completeimg');
	setTimeout(function(){ $('.bek-preloader-one').css("display", "none"); }, 1100);
})