@extends('layout.page')

@section('title', 'The Interactive Curriculum')

@section('page_content')
	<h2>Take a tour of the Interactive Curriculum!</h2>

	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			<li data-target="#carousel-example-generic" data-slide-to="3"></li>
			<li data-target="#carousel-example-generic" data-slide-to="4"></li>
			<li data-target="#carousel-example-generic" data-slide-to="5"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="{{ asset('/img/curriculum/screen_history.jpg') }}" alt="...">
				<div class="carousel-caption">
					<header><strong>Step 1: Choose your lesson</strong></header>
					<p>Log in, then select a grade level and general topic to begin.</p>
					<p>Each topic is divided into several in-depth lessons, making it easy to find exactly what you need.</p>
					<p>Clicking on a lesson allows you to choose from four modes: Study, Practice, Test, and Essay. Let's take a look at each.</p>
				</div>
			</div>
			<div class="item">
				<img src="{{ asset('/img/curriculum/study_history.jpg') }}" alt="...">
				<div class="carousel-caption">
					<header><strong>Step 2: Study the lesson</strong></header>
					<p>Study mode is the backbone of the program and contains everything students need to know for school and homework.</p>
					<p>There's <u>no</u> filler in the Interactive Curriculum! All lessons are short, engaging, and full of meaningful academic content.</p>
					<p>Students can control the pace with an easy-to-use page turner, and can click any hyperlinks in the text to trigger pop-up boxes filled with additional information.</p>
					<p>Graphics and teacher narration accompany many of the lessons, providing further clarification of the material.</p>
				</div>
			</div>
			<div class="item">
				<img src="{{ asset('/img/curriculum/practice_history.jpg') }}" alt="...">
				<div class="carousel-caption">
					<header><strong>Step 3: Practice the lesson</strong></header>
					<p>Practice mode allows students to apply what they've learned in a quiz format.</p>
					<p>Feedback is immediate; students receive the help they need, when they need it.</p>
					<p>Fresh new questions each session assures learning, not memorization, while a mixture of question styles helps students build test-taking skills.</p>
					<p>Review scores quickly when finished, and try again!</p>
				</div>
			</div>
			<div class="item">
				<img src="{{ asset('/img/curriculum/test_history.jpg') }}" alt="...">
				<div class="carousel-caption">
					<header><strong>Step 4: Take the test</strong></header>
					<p>Test mode recreates a real testing atmosphere. Students must answer all questions before feedback is given. Any missed answers can be reviewed once the test is complete.</p>
					<p>Wrong answer? Don't worry! You can take the test again and again.</p>
					<p>Answers will be switched and new answers added when re-testing.</p>
					<p>Review your scores and other information with the Progress Report!</p>
				</div>
			</div>
			<div class="item">
				<img src="{{ asset('/img/curriculum/essay_history.jpg') }}" alt="...">
				<div class="carousel-caption">
					<header><strong>Step 5: Get Creative</strong></header>
					<p>Essay mode encourages students to think more deeply about the material by providing open-ended questions as writing topics.</p>
					<p>There are no wrong answers in Essay mode. Students can express themselves while building strong writing skills!</p>
				</div>
			</div>
			<div class="item">
				<img src="{{ asset('/img/curriculum/recess_geography.jpg') }}">
				<img src="{{ asset('/img/curriculum/recess_math.jpg') }}">
				<div class="carousel-caption">
					<p>Take a break! Recess mode keeps students learning with interactive games.</p>
				</div>
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<div id="samplepics">
		<article class="row clearfix">
			<div class="col-md-3 col-md-offset-3 text-right">
				<header><strong>Step 1: Choose your lesson</strong></header>
				<p>Log in, then select a grade level and general topic to begin.</p>
				<p>Each topic is divided into several in-depth lessons, making it easy to find exactly what you need.</p>
				<p>Clicking on a lesson allows you to choose from four modes: Study, Practice, Test, and Essay. Let's take a look at each.</p>
			</div>
			<div class="col-md-6">
				<img src="{{ asset('/img/curriculum/screen_history.jpg') }}">
			</div>
		</article>

		<article class="row clearfix">
			<div class="col-md-6">
				<img src="{{ asset('/img/curriculum/study_history.jpg') }}">
			</div>
			<div class="col-md-3">
				<header><strong>Step 2: Study the lesson</strong></header>
				<p>Study mode is the backbone of the program and contains everything students need to know for school and homework.</p>
				<p>There's <u>no</u> filler in the Interactive Curriculum! All lessons are short, engaging, and full of meaningful academic content.</p>
				<p>Students can control the pace with an easy-to-use page turner, and can click any hyperlinks in the text to trigger pop-up boxes filled with additional information.</p>
				<p>Graphics and teacher narration accompany many of the lessons, providing further clarification of the material.</p>
			</div>
		</article>

		<article class="row clearfix">
			<div class="col-md-3 col-md-offset-3 text-right">
				<header><strong>Step 3: Practice the lesson</strong></header>
				<p>Practice mode allows students to apply what they've learned in a quiz format.</p>
				<p>Feedback is immediate; students receive the help they need, when they need it.</p>
				<p>Fresh new questions each session assures learning, not memorization, while a mixture of question styles helps students build test-taking skills.</p>
				<p>Review scores quickly when finished, and try again!</p>
			</div>
			<div class="col-md-6">
				<img src="{{ asset('/img/curriculum/practice_history.jpg') }}">
			</div>
		</article>

		<article class="row clearfix">
			<div class="col-md-6">
				<img src="{{ asset('/img/curriculum/test_history.jpg') }}">
			</div>
			<div class="col-md-3">
				<header><strong>Step 4: Take the test</strong></header>
				<p>Test mode recreates a real testing atmosphere. Students must answer all questions before feedback is given. Any missed answers can be reviewed once the test is complete.</p>
				<p>Wrong answer? Don't worry! You can take the test again and again.</p>
				<p>Answers will be switched and new answers added when re-testing.</p>
				<p>Review your scores and other information with the Progress Report!</p>
			</div>
		</article>

		<article class="row clearfix">
			<div class="col-md-3 col-md-offset-3 text-right">
				<header><strong>Step 5: Get Creative</strong></header>
				<p>Essay mode encourages students to think more deeply about the material by providing open-ended questions as writing topics.</p>
				<p>There are no wrong answers in Essay mode. Students can express themselves while building strong writing skills!</p>
			</div>
			<div class="col-md-6">
				<img src="{{ asset('/img/curriculum/essay_history.jpg') }}">
			</div>
		</article>

		<article class="sample_bottom text-center center-block">
			<img src="{{ asset('/img/curriculum/recess_geography.jpg') }}">
			<img src="{{ asset('/img/curriculum/recess_math.jpg') }}">
			<p>Take a break! Recess mode keeps students learning with interactive games.</p>
		</article>
	</div>

	<div class="font-plus text-center">Don't leave your child's education to chance. Build success with <strong>The Interactive Curriculum!</strong></div>
@stop
