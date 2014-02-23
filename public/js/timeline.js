<!--

var h = 1;

$(document).ready(function(){

	toggleTimeline();
	
	var $past = $('#timeline img:first');
	var $future = $('#timeline img:last');

	$past.hover(function(){
		$past.attr('src', "/images/nav/active_prev.png");
	}, function(){
		$past.attr('src', "/images/nav/arrow_l.png");
	});
	
	$past.click(function(){
		previousTime();
	});

	$future.hover(function(){
		$future.attr('src', "/images/nav/active_next.png");
	}, function(){
		$future.attr('src', "/images/nav/arrow_r.png");
	});
	
	$future.click(function(){
		nextTime();
	});
});

function toggleTimeline(){
	$('#timelinepics').attr('src', "/images/history/" + h + ".jpg");
	$('#inner_timeline div:nth-child(' + h + ')').fadeIn(600);

	if (h<=1){
		$('#timeline img:first').addClass('hidden');
	}
	else {
		$('#timeline img:first').removeClass('hidden');
	}
	if (h>=3){
		$('#timeline img:last').addClass('hidden');
	}
	else {
		$('#timeline img:last').removeClass('hidden');
	}
}


function nextTime(){
	if (h < 3){
		$('#inner_timeline div:nth-child(' + h + ')').fadeOut(200);
		h++;		
		toggleTimeline();
	}
	return false;
}

function previousTime(){
	if (h > 1){
		$('#inner_timeline div:nth-child(' + h + ')').fadeOut(200);
		h--;
		toggleTimeline();
	}
	return false;
}

//-->

