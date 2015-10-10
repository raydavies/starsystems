@extends('layout.reskin')

@section('title', 'Lessons Taught')

@section('headscripts')
	@parent
	<script src="{{ asset('/js/lesson-picker.js') }}" async></script>
@stop

@section('content')
	<p class="lesson_text text-left center-block"><strong>The Interactive Curriculum</strong> has over 2700 Teaching and Study Lessons designed to help students excel. Take a peek at what your child will be learning!</p>

	<div class="lesson_picker_container center-block">
		<img id="blackboard_child" class="img-responsive center-block" src="{{ asset('/img/blackboard.jpg') }}" alt="Child at blackboard" title="">

		<div class="lesson_picker">
			<header>Curious about the curriculum?<br>Select a level and subject below!</header>
			<form id="lesson_select_form" action="{{ URL::current() }}" method="get">

				<div class="form-group">
					<label for="level_select">Choose a level</label>
					<select id="level_select" name="level">
						@foreach ($levels as $level)
							<option value="{{ $level->level_id}}">{{ $level->name }} ({{ $level->grade_range }})</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label for="subject_select">Choose a subject</label>
					<select id="subject_select" name="subject">
						@foreach ($subjects as $subject)
							<option value="{{ $subject->subject_id }}">{{ $subject->name }}</option>
						@endforeach
					</select>
				</div>
				<button class="btn btn-success btn-lg" type="submit">View Lessons</button>
			</form>
		</div>
	</div>

	<div class="lesson_catalog center-block">
		@if (isset($current_level, $current_subject))
			<h2>{{ $current_level->name }}: {{ $current_subject->name }}</h2>
			@if (count($lessons))
				<div class="lesson_list row clearfix text-left">
					@foreach ($lessons as $lesson)
						<div class="lesson-title col-md-4">{{ $lesson->title }}</div>
					@endforeach
				</div>
			@else
				<div class="empty_list">No lessons found for this subject</div>
			@endif
		@endif
	</div>
@stop
