<?php

//renames class attribute on menu bar links
//highlights the current page on menu bar
//deactivates link
function currentURL($name, $url)
{
	global $address;
	global $button;
	
	if (strpos($_SERVER['REQUEST_URI'], $url) == true) {
		$address[$name] = "current";
		$button[$name] = $name;
		if (strpos($_SERVER['REQUEST_URI'], "curriculum") ||
			strpos($_SERVER['REQUEST_URI'], "samplelessons") ||
			strpos($_SERVER['REQUEST_URI'], "benefits") || 
			strpos($_SERVER['REQUEST_URI'], "tablets")) {
			$address['Our Product'] = "current";
			$button['Our Product'] = "Our Product";
		}
	} else {
		$address[$name] = "link";
		$button[$name] = "<a href=\"".$url."\">".$name."</a>";
	}
	if ($name == "Our Product") {
		$button[$name] = "Our Product";
	}
}

$links = array(
	"Home"=>"index",
	"Overview"=>"overview",
	"Our Product"=> false,
	"The Interactive Curriculum"=>"curriculum",
	"Sample Lessons"=>"samplelessons",
	"Benefits"=>"benefits",
	"Tablet PCs"=>"tablets",
	"FAQ"=>"faq",
	"Contact Us"=>"contactus"
);

//checks current url to set up title and disable self referential link
foreach ($links as $key=>$value) {
	currentURL($key, $value);
}
