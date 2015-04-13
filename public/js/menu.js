$(document).ready(function() {
	$('.drop-down').hover(function() {
		$('.sub-menu').stop(true, true).removeClass('hidden');
	}, function() {
		$('.sub-menu').stop(true, true).addClass('hidden');
	});

	highlightMenu('.nav-link');
});

function highlightMenu(selector)
{
	var url = (window.location.pathname === '/') ? window.location.origin : window.location.origin + window.location.pathname;

	$(selector).each(function() {
		var a = $(this).find('a:first');

		if (a.attr('href') === url) {
			a.attr('href', '#');

			if ($(this).closest('.sub-menu').length) {
				$(this).closest('.nav-link.drop-down').addClass('active');
			} else {
				$(this).addClass('active');
			}
		}
	});
}
