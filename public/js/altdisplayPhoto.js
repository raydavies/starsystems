<!--

var t = 1;

$(document).ready(function() {

	toggleSlide();
	
	var $previous = $('.slidebuttons:first');
	var $next = $('.slidebuttons:last');

	$previous.click(function() {
		previousSlide();
	});
	
	$next.click(function() {
		nextSlide();
	});
});

function toggleSlide()
{
	var $slide = $('#slideshow');

	$slide.attr('src', "/images/slides/" + t + ".jpg");

	if (t<=1) {
		$('.slidebuttons:first').attr('disabled', true);
	} else {
		$('.slidebuttons:first').attr('disabled', false);
	}
	
	if (t>=9) {
		$('.slidebuttons:last').attr('disabled', true);
	} else {
		$('.slidebuttons:last').attr('disabled', false);
	}
}

function nextSlide()
{
	if (t < 9) {
		t++;		
		toggleSlide();
	}
}

function previousSlide()
{
	if (t > 1) {
		t--;
		toggleSlide();
	}
}

//-->
