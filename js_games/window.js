$(document).ready(function() {
	// Window

	$("#switch").click(function(){
	  $(this).is(':checked') ? $(".dark").hide(1) : $(".dark").show(1);
	});
	
});