<!--

$(document).ready(function(){
	$('#submenu').hover(function(){
		$('#bubble').stop(true,true).fadeIn(200);
		$('#navbar li ul').stop(true,true).fadeIn(200);
	}, function(){
		$('#bubble').stop(true,true).fadeOut(200);
		$('#navbar li ul').stop(true,true).fadeOut(200);
	});

	var title = $(this).attr('title').substring(24);
	menuSelector(title);
});

var menuSelector = function(title){
	if (title === "The Interactive Curriculum" ||
		title === "Sample Lessons" ||
		title === "Benefits" ||
		title === "Tablet PCs"){

		$('.menulinks:nth-child(3)').css('background-color','#c5b358');
		$('.menulinks:nth-child(3) > a:first').css('color','white');
		highlightMenu('.sublinks', title);
	}
	else{
		highlightMenu('.menulinks', title);
	}
};

var highlightMenu = function(group, title){
	if (title === "Home of the Interactive Curriculum"){
		title = "Home";
	}
	for (var i=1;i< $(group).length+1;i++){
		var current = $(group+':nth-child('+i+') a:first');
		if (current.html() == title){
			current.removeAttr('href');
			current.css('cursor','default');
			$(group+':nth-child('+i+')').css('background-color','#c5b358');
			current.css('color','white');
		}
	}
};

//-->
