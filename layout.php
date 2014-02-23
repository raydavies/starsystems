<!DOCTYPE html>
<html>
<head>
	<meta name="description" content="Interactive Curriculum Tutoring Software" />
	<meta name="keywords" content="tutor,software,curriculum,school,interactive curriculum,math,reading,home school,homeschool curriculum,phonics,math,star systems,star learning systems,hippo,hippo software,hippo curriculum" />
	<meta name="author" content="Star Learning Systems" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	
	<title>Star Learning Systems | Home of the Interactive Curriculum </title>
	<?php require("inc/headers.php"); ?>
</head>
<body>
	<?php include_once("inc/analyticstracking.php"); ?>
	
	<a name="top"></a>
	<div id="head_wrapper">
		<div id="header">
			<h1 id="logo"><span>Star Learning Systems</span></h1>
			<?php include_once("inc/socialbuttons.php"); ?>
		</div>
	</div>
	<div id="wrapper">
		<div id="main_wrapper">
			<div id="main">
				<?php
				include_once("inc/navbar.php");
				echo $page_content;
				require("inc/footer.php");
				?>
				<a href="#top"><span class="scrolltext">Back to Top</span><img id="scrollbutton" class="hidden" src="/images/nav/scrollbutton.png"></a>
			</div><!--END MAIN DIV-->
		</div><!--END MAIN WRAPPER-->
	</div><!--END WRAPPER DIV-->
</body>
</html>
