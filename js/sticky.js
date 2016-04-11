	
function stick(element,t,b) {
	$.lockfixed(element,
		{offset: {top: t, bottom: b}}
	);
}


$(function() {
	var w=$(window).width();
	if (w>=768){
		stick("#sticky_aderisci",10,100);
	}
});

$(window).resize(function() {
	var w=$(window).width();
	if (w>=768){
		stick("#sticky_aderisci",10,100);
	}
});