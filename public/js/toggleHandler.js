<!--
$(document).ready(function() {

	$(window).load(function() {
		queryString();
		//toggleSelect();
		changeOptions();
	});
	
	$('#lesson_catalog select:eq(0)').change(function() {
		//toggleSelect();
		changeOptions();
	});

	$('#faq div').click(function() {
		$(this).children('.answer').slideToggle(500);
		var $img = $(this).find('img');
		if ($img.attr('src') == '/images/nav/expand.png') {
			$img.attr('src','/images/nav/collapse.png');
		} else {
			$img.attr('src','/images/nav/expand.png');
		}
	});
});

var toggleSelect = function() {	
	if ($('#lesson_catalog select:eq(0) > option:selected').attr('value') === '') {
		$('#lesson_catalog select:eq(1)').attr('disabled', true);
	} else {
		$('#lesson_catalog select:eq(1)').attr('disabled', false);
	}
};

var changeOptions = function() {
	var $array1 = new Array('Grammar', 'Reading', 'Vocabulary', 'Math', 'Science', 'Social Studies');
	var $array2 = new Array('Reading', 'Math', 'Biology', 'Chemistry', 'Physics', 'History');

	if ($('#lesson_catalog select:eq(0) > option:selected').attr('value') === '4') {
		for (var i = 0; i < 6; i++) {
			$('#lesson_catalog select:eq(1) > option:eq(' + i + ')').html($array2[i]);
		}
	} else {
		for (var i = 0; i < 6; i++) {
			$('#lesson_catalog select:eq(1) > option:eq(' + i + ')').html($array1[i]);
		}
	}
};

var queryString = function() {
	var match;
	var urlParams = {};
	var pl = /\+/g;
	var search = /([^&=]+)=?([^&]*)/g;
	var decode = function (s) {
		return decodeURIComponent(s.replace(pl, " "));
	};
	var query = window.location.search.substring(1);
	while (match = search.exec(query)) {
		urlParams[decode(match[1])] = decode(match[2]);
	}
	if (urlParams["level"] !== '') {
		$('#lesson_catalog select:eq(0) > option:eq('+(parseInt(urlParams["level"])-1)+')').attr('selected','selected');
		$('#lesson_catalog select:eq(1) > option:eq('+(parseInt(urlParams["subject"])-1)+')').attr('selected','selected');
	}
};

//-->
