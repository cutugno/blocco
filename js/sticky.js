	
function stick(element) {
	$.lockfixed(element,
		{offset: {top: 10, bottom: 10}}
	);
}

$(function() {
	stick("#sticky_aderisci");
});

$(window).resize(function() {
	var w=$(window).width();
	console.log(w);
	if (w>=768){
		stick("#sticky_aderisci");
	}
});
		
