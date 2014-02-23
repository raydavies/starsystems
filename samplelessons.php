<!DOCTYPE html>

<html>
<head>
<meta name="description" content="Interactive Curriculum Tutoring Software" />
<meta name="keywords" content="tutor,software,curriculum,school,interactive curriculum,math,reading,home school,homeschool curriculum,phonics,math,star systems,star learning systems,hippo,hippo software,hippo curriculum" />
<meta name="author" content="Star Learning Systems" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />


<title>Star Learning Systems | Sample Lessons </title>

<?php require("inc/headers.php"); ?>
</head>

<body>
<?php include_once("inc/analyticstracking.php") ?>
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

<?php include_once("inc/navbar.php"); ?>

<div class="content">
<p id="lesson_text"><strong>The Interactive Curriculum</strong> has over 2700 Teaching and Study Lessons designed to help students excel. Take a peek at what your child will be learning!</p>

<img id="blackboardchild" src="/images/blackboard.jpg" alt="Child at blackboard" title=''>

<div id="lesson_catalog">
<span>Curious about the curriculum? Just pick a subject below!</span>
	<form action='' method='get'>
		
		Choose a level:<br>
		<select name="level">
			<option value=1 selected="selected">Primary (K-3rd)</option>
			<option value=2>Intermediate (4th-6th)</option>
			<option value=3>Advanced (7th-9th)</option>
			<option value=4>Pre-College (10th-12th)</option>
		</select><br>

		Choose a subject:<br>
		<select name="subject">
			<option value=1 selected="selected">Grammar</option>
			<option value=2>Reading</option>
			<option value=3>Vocabulary</option>
			<option value=4>Math</option>
			<option value=5>Science</option>
			<option value=6>Social Studies</option>
		</select><br>
		<input type="submit" value="Go!">
	</form>
</div>

<?php require('inc/lessonfinder.php') ?>

</div><!--END CONTENT DIV-->

<?php require("inc/footer.php") ?>

</body>
</html>
