@extends('layout.page')

@section('title', 'Frequently Asked Questions')

@section('headscripts')
	@parent
	<script src="{{ asset('/js/faq.js') }}"></script>
@stop

@section('page_content')
	<h1>Frequently Asked Questions</h1>

	<div id="faq" class="text-left">
		<div class="question panel panel-info">
			<div class="panel-heading" data-toggle="collapse" data-target="#answer-1">
				<h3 class="panel-title text-left">What are the computer requirements?</h3>
				<span class="caret caret-large active pull-right"></span>
			</div>
			<div id="answer-1" class="answer panel-body panel-collapse in">The Hippo Interactive Curriculum will work on any version of Windows, including Windows installations running via Boot Camp on a Mac.</div>
		</div>

		<div class="question panel panel-info">
			<div class="panel-heading" data-toggle="collapse" data-target="#answer-2">
				<h3 class="panel-title text-left">If my child wants to take a practice or test again, will it be the same questions?</h3>
				<span class="caret caret-large active pull-right"></span>
			</div>
			<div id="answer-2" class="answer panel-body panel-collapse in">Each time your child clicks on the practice or test button, the software changes the order of some questions and always adds new ones. We call this the 'Teacher Feature'.</div>
		</div>

		<div class="question panel panel-info">
			<div class="panel-heading" data-toggle="collapse" data-target="#answer-3">
				<h3 class="panel-title text-left">My child previously attended a tutoring center. Can he use your software program instead of enrolling again at the tutor?</h3>
				<span class="caret caret-large active pull-right"></span>
			</div>
			<div id="answer-3" class="answer panel-body panel-collapse in">Yes, approx. 50% of our customers previously had children going to tutors. However, they now use our program and are amazed at the results. Also, many school teachers see the benefits and are using our software for their own children at home.</div>
		</div>

		<div class="question panel panel-info">
			<div class="panel-heading" data-toggle="collapse" data-target="#answer-4">
				<h3 class="panel-title text-left">How much does the program cost?</h3>
				<span class="caret caret-large active pull-right"></span>
			</div>
			<div id="answer-4" class="answer panel-body panel-collapse in">Call (708) 675-7640 for pricing information.</div>
		</div>

		<div class="question panel panel-info">
			<div class="panel-heading" data-toggle="collapse" data-target="#answer-5">
				<h3 class="panel-title text-left">How do I contact the company?</h3>
				<span class="caret caret-large active pull-right"></span>
			</div>
			<div id="answer-5" class="answer panel-body panel-collapse in">
				<address>
					<strong>Star Learning Systems</strong><br>
					14007 S. Bell Road<br>
					Homer Glen, IL 60491<br>
					(708) 675-7640<br>
					Fax: (866) 591-1721<br>
					Email: postmaster@starlearningsystems.com<br>
				</address>
				<a href="{{ route('contact') }}">Or click here to go to our contact page!</a>
			</div>
		</div>
	</div>
@stop
