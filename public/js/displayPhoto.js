<!--

var t = 1;
$(document).ready(function() {

	toggleSlide();
	
	var $previous = $('#nav_prev');
	var $next = $('#nav_next');
	
	$previous.hover(function() {
		$previous.attr('src', '/images/nav/active_prev.png');
	}, function() {
		$previous.attr('src', '/images/nav/arrow_prev.png');
	});

	$previous.click(function() {
		previousSlide();
	});

	$next.hover(function() {
		$next.attr('src', '/images/nav/active_next.png');
	}, function() {
		$next.attr('src', '/images/nav/arrow_next.png');
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
		$('#nav_prev').addClass('hidden');
	} else {
		$('#nav_prev').removeClass('hidden');
	}
	if (t>=9) {
		$('#nav_next').addClass('hidden');
	} else {
		$('#nav_next').removeClass('hidden');
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
