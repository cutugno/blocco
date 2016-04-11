$(window).scroll(function() {
	var st = $(window).scrollTop();
	if (st>=1000) {
		$("#scrolltop").fadeIn();
	}else{
		$("#scrolltop").fadeOut();
	}
});

$('#scrolltop').click(function(){
	$('html, body').animate({scrollTop : 0},800);
	return false;
});