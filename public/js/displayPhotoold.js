<!--

var i = 1;


window.onload = function(){
	toggleSlide();
	addHandler();
}

function addHandler(){
	var previous = document.getElementById("pics").getElementsByTagName("input")[0];
	var next = document.getElementById("pics").getElementsByTagName("input")[1];
	previous.onclick = function(){
		previousSlide();
	}
	next.onclick = function(){
		nextSlide();
	}
}

function toggleSlide(){
	var button = document.getElementById("pics").getElementsByTagName("input");
	var slide = document.getElementById("slide")

	slide.src = "/images/slides/" + i + ".jpg";

	if (i<=1){
		button[0].disabled = true;
	}
	else {
		button[0].disabled = false;
	}
	if (i>=9){
		button[1].disabled = true;
	}
	else {
		button[1].disabled = false;
	}
}

function nextSlide(){
	if (i < 9){
		i++		
		toggleSlide();
	}
}

function previousSlide(){
	if (i > 1){
		i--;
		toggleSlide();
	}
}

//-->
