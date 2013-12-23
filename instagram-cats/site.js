$(document).ready(function(){
	$('.delete-pic').click(function(){
		if ( confirm("Are you sure you want to delete this?") ) {
			$(this).parent().fadeOut(500, function(){
				$(this).remove();
			});
		}	
	});

	$('.favorite-button').click(function(){
		$('.overlay').children().hide();
		$('.overlay').append('<p style="text-align:center; float:none;">Already voted</p>');
		
		$(this).parent().hide();

		$(this).parent().next().fadeIn(300);
	});

});

