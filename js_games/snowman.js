$(document).ready(function() {
	// Snowman

	var thingsToShow = [$('.bottom-circle'),$('.middle-circle'),$('.top-circle'),$('.arms'),$('.hat'),$('.face')];
	var thingIndex = 0;

	$('.snowman button').click(function() {
	    thingsToShow[thingIndex].show('slow');

	    thingIndex++;
	});
	
});