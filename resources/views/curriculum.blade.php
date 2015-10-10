@extends('layout.reskin')

@section('title', 'The Interactive Curriculum')

@section('content')
	<h2>Take a tour of the Interactive Curriculum!</h2>

	<div id="samplepics" class="text-left clearfix">
		<article class="sample_right pull-right clearfix">
			<img src="{{ asset('/img/curriculum/screen_history.jpg') }}">
			<header><strong>Step 1: Choose your lesson</strong></header>
			<p>Log in, then select a grade level and general topic to begin.</p>
			<p>Each topic is divided into several in-depth lessons, making it easy to find exactly what you need.</p>
			<p>Clicking on a lesson allows you to choose from four modes: Study, Practice, Test, and Essay. Let's take a look at each.</p>
		</article>

		<article class="sample_left pull-left clearfix">
			<img src="{{ asset('/img/curriculum/study_history.jpg') }}">
			<!--<img class="hidden" src="{{ asset('/img/curriculum/study_math.jpg') }}">
			<img class="hidden" src="{{ asset('/img/curriculum/study_math2.jpg') }}">-->
			<header><strong>Step 2: Study the lesson</strong></header>
			<p>Study mode is the backbone of the program and contains everything students need to know for school and homework.</p>
			<p>There's <u>no</u> filler in the Interactive Curriculum! All lessons are short, engaging, and full of meaningful academic content.</p>
			<p>Students can control the pace with an easy-to-use page turner, and can click any hyperlinks in the text to trigger pop-up boxes filled with additional information.</p>
			<p>Graphics and teacher narration accompany many of the lessons, providing further clarification of the material.</p>
		</article>

		<article class="sample_right pull-right clearfix">
			<img src="{{ asset('/img/curriculum/practice_history.jpg') }}">
			<!--<img class="hidden" src="{{ asset('/img/curriculum/practice_science.jpg') }}">
			<img class="hidden" src="{{ asset('/img/curriculum/practice_reading.jpg') }}">-->
			<header><strong>Step 3: Practice the lesson</strong></header>
			<p>Practice mode allows students to apply what they've learned in a quiz format.</p>
			<p>Feedback is immediate; students receive the help they need, when they need it.</p>
			<p>Fresh new questions each session assures learning, not memorization, while a mixture of question styles helps students build test-taking skills.</p>
			<p>Review scores quickly when finished, and try again!</p>
		</article>

		<article class="sample_left pull-left clearfix">
			<img src="{{ asset('/img/curriculum/test_history.jpg') }}">
			<header><strong>Step 4: Take the test</strong></header>
			<p>Test mode recreates a real testing atmosphere. Students must answer all questions before feedback is given. Any missed answers can be reviewed once the test is complete.</p>
			<p>Wrong answer? Don't worry! You can take the test again and again.</p>
			<p>Answers will be switched and new answers added when re-testing.</p>
			<p>Review your scores and other information with the Progress Report!</p>
		</article>

		<article class="sample_right pull-right clearfix">
			<img src="{{ asset('/img/curriculum/essay_history.jpg') }}">
			<!--<img class="hidden" src="{{ asset('/img/curriculum/essay_reading.jpg') }}">
			<img class="hidden" src="{{ asset('/img/curriculum/essay_science.jpg') }}">-->
			<header><strong>Step 5: Get Creative</strong></header>
			<p>Essay mode encourages students to think more deeply about the material by providing open-ended questions as writing topics.</p>
			<p>There are no wrong answers in Essay mode. Students can express themselves while building strong writing skills!</p>
		</article>

		<article class="sample_bottom text-center center-block">
			<img src="{{ asset('/img/curriculum/recess_geography.jpg') }}">
			<img src="{{ asset('/img/curriculum/recess_math.jpg') }}">
			<p>Take a break! Recess mode keeps students learning with interactive games.</p>
		</article>
	</div>

	<div id="bottom_text">Don't leave your child's education to chance. Build success with <strong>The Interactive Curriculum!</strong></div>
@stop
