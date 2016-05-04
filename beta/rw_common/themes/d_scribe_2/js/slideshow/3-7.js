jQuery.noConflict();
jQuery(document).ready(function($){
	
	$('#featureImage').css('background', 'none');
	
	$('#slideshow').cycle({
		fx: 'fade',
		pause: 1,
		speed: 3500, 
		timeout: 7000,
		delay: -3500
	});
});