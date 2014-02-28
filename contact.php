<div class="content">

	<h4>For more information, or to leave us a comment,<br> please fill out the form below!</h4>

	<h3>Star Learning Systems</h3>

	<p><strong>14007 S Bell Rd &bull; Homer Glen, IL 60491<br>
		(708) 675-7640<br>
		or Toll Free<br>
		1 (866) 923-6729</strong>
	</p>

	<p><em>All fields marked with an asterisk (*) are required.</em></p>

	<div id="form_wrapper">
		<form id="contact_form" method="post" action='/cgi/emailhandler.php'>
			<table>
				<tr>
					<td class="formlabel">Your Name*</td>
					<td><input type="text" size="35" maxlength="50" name="name" id="name"></td>
					<td><span class="errormsg" id="nameerror">Please enter your name</span></td>
				</tr>
				
				<tr>
					<td class="formlabel">Your E-mail Address*</td>
					<td><input type="text" size="35" maxlength="50" name="email" id="email"></td> 
					<td rowspan="2" valign="top"><span class="errormsg" id="emailerror">Please enter a valid e-mail address</span></td>
				</tr>
				
				<tr>
					<td class="formlabel">Subject</td>
					<td valign="middle"><input type="text" size="30" name="subject" id="subject"></td>
				</tr>
				
				<tr>
					<td class="formlabel">Your Message*</td>
					<td><textarea cols="35" rows="7" name="message" id="message"></textarea></td>
					<td><span class="errormsg" id="msgerror">Please enter some text</span></td>
				</tr>
			</table>
		
			<p><input type="submit" id="submit" value="Send" /></p>
		</form>
	</div>
</div><!--END CONTENT DIV-->
