@extends('layout.master')

@section('content')
	<h2>Take a tour of the Interactive Curriculum!</h2>

	<div id="samplepics">

		<div class="sample_right">
			<img src="{{ asset('/img/curriculum/screen_history.jpg') }}">
			<p><strong>Step 1: Choose your lesson</strong><br><br>
				Log in, then select a grade level and general topic to begin.<br><br>
				Each topic is divided into several in-depth lessons, making it easy to find exactly what you need.<br><br>
				Clicking on a lesson allows you to choose from four modes: Study, Practice, Test, and Essay. Let's take a look at each.
			</p>
		</div>

		<div class="sample_left">
			<img src="{{ asset('/img/curriculum/study_history.jpg') }}">
			<img class="hidden" src="{{ asset('/img/curriculum/study_math.jpg') }}">
			<img class="hidden" src="{{ asset('/img/curriculum/study_math2.jpg') }}">
			<p><strong>Step 2: Study the lesson</strong><br><br>
				Study mode is the backbone of the program and contains everything students need to know for school and homework.<br><br>
				There's <u>no</u> filler in the Interactive Curriculum! All lessons are short, engaging, and full of meaningful academic content.<br><br>
				Students can control the pace with an easy-to-use page turner, and can click any hyperlinks in the text to trigger pop-up boxes filled with additional information.<br><br>
				Graphics and teacher narration accompany many of the lessons, providing further clarification of the material.
			</p>
		</div>

		<div class="sample_right">
			<img src="{{ asset('/img/curriculum/practice_history.jpg') }}">
			<img class="hidden" src="{{ asset('/img/curriculum/practice_science.jpg') }}">
			<img class="hidden" src="{{ asset('/img/curriculum/practice_reading.jpg') }}">
			<p><strong>Step 3: Practice the lesson</strong><br><br>
				Practice mode allows students to apply what they've learned in a quiz format.<br><br>
				Feedback is immediate; students receive the help they need, when they need it.<br><br>
				Fresh new questions each session assures learning, not memorization, while a mixture of question styles helps students build test-taking skills.<br><br>
				Review scores quickly when finished, and try again!
			</p>
		</div>

		<div class="sample_left">
			<img src="{{ asset('/img/curriculum/test_history.jpg') }}">
			<p><strong>Step 4: Take the test</strong><br><br>
				Test mode recreates a real testing atmosphere. Students must answer all questions before feedback is given. Any missed answers can be reviewed once the test is complete.<br><br>
				Wrong answer? Don't worry! You can take the test again and again.<br><br>
				Answers will be switched and new answers added when re-testing.<br><br>
				Review your scores and other information with the Progress Report!
			</p>
		</div>

		<div class="sample_right">
			<img src="{{ asset('/img/curriculum/essay_history.jpg') }}">
			<img class="hidden" src="{{ asset('/img/curriculum/essay_reading.jpg') }}">
			<img class="hidden" src="{{ asset('/img/curriculum/essay_science.jpg') }}">
			<p><strong>Step 5: Get Creative</strong><br><br>
				Essay mode encourages students to think more deeply about the material by providing open-ended questions as writing topics.<br><br>
				There are no wrong answers in Essay mode. Students can express themselves while building strong writing skills!
			</p>
		</div>

		<div class="sample_bottom">
			<img src="{{ asset('/img/curriculum/recess_geography.jpg') }}">
			<img src="{{ asset('/img/curriculum/recess_math.jpg') }}">
			<br>
			Take a break! Recess mode keeps students learning with interactive games.
		</div>
	</div>

	<p id="bottom_text">Don't leave your child's education to chance. Build success with <strong>The Interactive Curriculum!</strong></p>

@stop
