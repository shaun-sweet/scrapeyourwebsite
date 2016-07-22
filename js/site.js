$(document).ready(function(){
	$('tab').on('click', function(e) {
		var url = $(this).find($("a")).attr("href");
		window.location.href=url
	});
});