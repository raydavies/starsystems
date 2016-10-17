$(document).ready(function() {
	$('#faq .question').bind('show.bs.collapse', function() {
		$(this).find('.caret').addClass('active');
	});

	$('#faq .question').bind('hide.bs.collapse', function() {
		$(this).find('.caret').removeClass('active');
	});
});
