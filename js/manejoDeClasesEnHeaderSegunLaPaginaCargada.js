$(document).ready(function(){
	var origin   = document.location.href.match(/[^\/]+$/)[0];  // Returns base URL
		
		$('a[href$="'+origin+'"]').addClass("active");
	
});
