<div class="content">

	<h3>For more information, or to leave us a comment, please fill out the form below!</h3>

	<img id="blackboardchild" src="/img/blackboard.jpg" alt="Child at blackboard" title='' />
	<img id="computerchild" src="/img/computer.jpg" alt="Child at computer" title='' />

	<h3>Star Systems</h3>

	<p><strong>(708) 675-7640 Homer Glen, IL<br />
		(571) 482-7613 Arlington, VA <br />
		or Toll Free<br />
		1 (866) 923-6729</strong>
	</p>

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
