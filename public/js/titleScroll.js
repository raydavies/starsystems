$(document).ready(function() {
	$(window).bind('scroll', function() {
		parallaxScroll();
		showScrollButton();
	});
	$('a[href=#top]').click(function(event) {
		event.preventDefault();
		topScroll();
	});
});

var parallaxScroll = function() {
	var scrolled = $(window).scrollTop();
	$('.star_logo').css('top', (0 - (scrolled * 0.75)) + 'px');
};

var topScroll = function() {
	$('html, body').animate({scrollTop: 0}, 1000);
};

var showScrollButton = function() {
	$('.scroll-btn').hide();
	var halfway = ($('body').height()) / 2;
	if ($(document).scrollTop() >= halfway) {
		$('.scroll-btn').show();
	}
};
