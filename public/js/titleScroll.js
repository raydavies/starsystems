$(document).ready(function() {
	$(window).bind('scroll',function() {
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
	$('#logo').css('top',(35-(scrolled*0.75))+'px');
};

var topScroll = function() {
	$('html, body').animate({scrollTop:0}, 1000);
};

var showScrollButton = function() {
	$('#scrollbutton').hide();
	var halfway = ($('body').height()) / 2;
	if ($(document).scrollTop() >= halfway) {
		$('#scrollbutton').show();
	}		
};
