<!DOCTYPE html>
<html>
<head>
	<meta name="description" content="Interactive Curriculum Tutoring Software" />
	<meta name="keywords" content="tutor,software,curriculum,school,interactive curriculum,math,reading,home school,homeschool curriculum,phonics,math,star systems,star learning systems,hippo,hippo software,hippo curriculum" />
	<meta name="author" content="Star Learning Systems" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<title><?php echo $title; ?></title>
	<?php require(VIEW_PATH . '/partial/headers.php'); ?>
</head>
<body>
	<script type="text/javascript"><?php include_once('/js/analyticstracking.js'); ?></script>

	<a name="top"></a>
	<div class="head_wrapper">
		<div class="header">
			<h1 class="star_logo"><span>Star Learning Systems</span></h1>
			<?php include_once(VIEW_PATH . '/partial/socialbuttons.php'); ?>
			<?php
				include_once(VIEW_PATH . '/partial/navbar.php');
			?>
		</div>
	</div>
	<div class="main_wrapper">
		<div class="page_wrapper">
			<div class="page">
				<div class="content">
					<?php //echo $content; ?>
				</div><!--END CONTENT DIV-->
				<a href="#top"><span class="scroll-text">Back to Top</span><img class="scroll-btn" class="hidden" src="/img/nav/scrollbutton.png"></a>
			</div><!--END MAIN DIV-->
		</div><!--END MAIN WRAPPER-->
	</div><!--END WRAPPER DIV-->
	<?php
	require(VIEW_PATH . '/partial/footer.php');
	?>
</body>
</html>
