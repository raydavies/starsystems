$(document).ready(function() {
	$('.inner-square-text').on('click', function() {
		var infoText = $(this).find('.info-text');
		infoText.toggleClass('hidden');

		if (infoText.hasClass('hidden')) {
			$(this).css('padding-top', '70px');
			$(this).closest('.outer-square-text').css('height', '200px');
		} else {
			$(this).css('padding-top', '10px');
			$(this).closest('.outer-square-text').css('height', 'auto');
		}
	});
});
