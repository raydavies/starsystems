@section('content')
	<p id="lesson_text"><strong>The Interactive Curriculum</strong> has over 2700 Teaching and Study Lessons designed to help students excel. Take a peek at what your child will be learning!</p>

	<img id="blackboardchild" src="/img/blackboard.jpg" alt="Child at blackboard" title=''>

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

	<?php //require(constant('APP_PATH').'/inc/lessonfinder.php'); ?>
@stop
