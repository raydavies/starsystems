<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
<meta name="description" content="Interactive Curriculum Tutoring Software" />
<meta name="keywords" content="tutor,software,curriculum,school" />
<meta name="author" content="Star Learning Systems" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title>Star Learning Systems | Contact Us</title>

<?php require("cgi/common_functions.php") ?>

<link rel="icon" href="images/hippoicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="images/hippoicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="styles/main.css" />
<link rel="stylesheet" type="text/css" href="styles/contactform.css" />

<style> @import "styles/starlogo.css" screen;</style>

<script type="text/javascript" src="cgi/formvalidator.js"></script>

</head>

<body>
<?php include_once("inc/analyticstracking.php") ?>
<?php
require("inc/header.inc");
?>

<div class="content">

<h3>For more information, or to leave us a comment, please fill out the form below!</h3>

<img id="blackboardchild" src="images/blackboard.jpg" alt="Child at blackboard" title='' />
<img id="computerchild" src="images/computer.jpg" alt="Child at computer" title='' />

<h3>Star Systems</h3>

	<p><strong>(708) 675-7640 Homer Glen, IL<br />
	(571) 482-7613 Arlington, VA <br />
	or Toll Free<br />
	1 (866) 923-6729</strong></p>

<p><em>All fields marked with an asterisk (*) are required.</em></p>

<div id="contactform">

<form method="post" action='' onsubmit="return verifyForm()">

<table>
<tr>
<td class="formlabel">Your Name*</td>
<td><input type="text" size="50" maxlength="50" name="name" id="name" onchange="validName();" /></td>
<td><span class="errormsg" id="nameerrormsg">Please enter your name</span></td>
</tr>

<tr>
<td class="formlabel">Your E-mail Address*</td>
<td><input type="text" size="50" maxlength="50" name="email" id="email" onchange="validEmail();"/></td> 
<td rowspan="2" valign="top"><span class="errormsg" id="emailerrormsg">Please enter a valid e-mail address</span></td>
</tr>

<tr>
<td class="formlabel">Subject</td>
<td valign="middle"><input type="text" size="30" name="subject" /></td>
</tr>

<tr>
<td class="formlabel">Your Message*</td>
<td><textarea cols="38" rows="7" name="comment" id="comment" onchange="validComments();"></textarea></td>
<td><span class="errormsg" id="commenterrormsg">Please enter some text</span></td>
</tr>
</table>

<p><input type="submit" id="submit" value="Send" /></p>
</form>

</div><!--END CONTACT FORM-->

</div><!--END CONTENT DIV-->

<?php
require("inc/footer.inc");
?>

</body>
</html>
