$(document).ready(function() {
	$(window).bind('scroll', function() {
		//parallaxScroll();
		showScrollButton();
	});

	$('a[href=#top]').bind('click', function(event) {
		event.preventDefault();
		scrollToTop(1000);
	});

	showScrollButton();
});

/**
 * Sets the position of the title logo based on scroll position.
 */
function parallaxScroll()
{
	var scrolled = $(window).scrollTop();
	$('.star_logo').css('top', (0 - (scrolled * 0.75)) + 'px');
}

/**
 * Determines whether or not to display the scroll to top
 * button based on the window position.
 */
function showScrollButton()
{
	var breakpoint = ($('body').height()) / 4;

	if ($(document).scrollTop() >= breakpoint) {
		$('.scroll-btn').removeClass('hidden');
	} else {
		$('.scroll-btn').addClass('hidden');
	}
}

/**
 * Scrolls to the top of the window at the specified pace.
 * @param {int} time
 */
function scrollToTop(time)
{
	var time = parseInt(time, 10);
	$('html, body').animate({scrollTop: 0}, time);
}
