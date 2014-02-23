<?php

//renames class attribute on menu bar links
//highlights the current page on menu bar
//deactivates link
function CurrentURL($name, $url) {
	global $address;
	global $button;
	if (strpos($_SERVER['PHP_SELF'], $url) == true)
	{		
		$address[$name] = "current";
		$button[$name] = $name;
		if (strpos($_SERVER['PHP_SELF'], "curriculum.php") ||
		strpos($_SERVER['PHP_SELF'], "samplelessons.php") ||
		strpos($_SERVER['PHP_SELF'], "benefits.php") || 
		strpos($_SERVER['PHP_SELF'], "tablets.php"))
		{
			$address['Our Product'] = "current";
			$button['Our Product'] = "Our Product";
		}
	}
	else {
		$address[$name] = "link";
		$button[$name] = "<a href=\"".$url."\">".$name."</a>";
	}
	if ($name == "Our Product"){
		$button[$name] = "Our Product";
	}
}

$links = array("Home"=>"index.php",
	"Overview"=>"overview.php",
	"Our Product"=>False,
	"The Interactive Curriculum"=>"curriculum.php",
	"Sample Lessons"=>"samplelessons.php",
	"Benefits"=>"benefits.php",
	"Tablet PCs"=>"tablets.php",
	"FAQ"=>"faq.php",
	"Contact Us"=>"contactus.php");

//checks current url to set up title and disable self referential link
foreach ($links as $key=>$value) {
	CurrentURL($key, $value);
}

?>
