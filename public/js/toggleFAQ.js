function toggleAnswer(num) {
	var answer = document.getElementById("answer" + num);
	var image = document.getElementById("faq").getElementsByTagName("img");
	if (answer.style.display == "block") {
		answer.style.display = "none";
		image[num].src = "/images/expand.png";
		image[num].setAttribute("alt", "expand");
	} else {
		answer.style.display = "block";
		image[num].src = "/images/collapse.png";
		image[num].setAttribute("alt", "collapse");
	}
}
