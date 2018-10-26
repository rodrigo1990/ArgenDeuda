$(document).ready(function(){
	var origin   = document.location.href.match(/[^\/]+$/);  // Returns base URL
		
		$('a[href$="'+origin+'"]').addClass("active");
	
});
